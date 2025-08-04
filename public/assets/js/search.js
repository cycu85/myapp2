/**
 * Search functionality for AssetHub
 */
class AssetHubSearch {
    constructor() {
        this.searchInput = document.getElementById('search-options');
        this.searchDropdown = document.getElementById('search-dropdown');
        this.searchClose = document.getElementById('search-close-options');
        this.currentQuery = '';
        this.searchTimeout = null;
        
        this.init();
    }

    init() {
        if (!this.searchInput) return;

        this.searchInput.addEventListener('input', (e) => {
            this.handleInput(e.target.value);
        });

        this.searchInput.addEventListener('focus', () => {
            if (this.currentQuery.length >= 2) {
                this.showDropdown();
            }
        });

        this.searchInput.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.hideDropdown();
                this.searchInput.blur();
            }
        });

        if (this.searchClose) {
            this.searchClose.addEventListener('click', () => {
                this.clearSearch();
            });
        }

        // Hide dropdown when clicking outside
        document.addEventListener('click', (e) => {
            if (!this.searchInput.contains(e.target) && !this.searchDropdown.contains(e.target)) {
                this.hideDropdown();
            }
        });
    }

    handleInput(query) {
        this.currentQuery = query.trim();

        if (this.searchTimeout) {
            clearTimeout(this.searchTimeout);
        }

        if (this.currentQuery.length === 0) {
            this.clearSearch();
            return;
        }

        if (this.currentQuery.length < 2) {
            this.showEmptyState();
            return;
        }

        // Show loading state
        this.showLoadingState();

        // Debounce search requests
        this.searchTimeout = setTimeout(() => {
            this.performSearch(this.currentQuery);
        }, 300);
    }

    async performSearch(query) {
        try {
            const response = await fetch(`/api/search?q=${encodeURIComponent(query)}`);
            const data = await response.json();
            
            if (response.ok) {
                this.displayResults(data);
            } else {
                this.showErrorState('Błąd wyszukiwania');
            }
        } catch (error) {
            console.error('Search error:', error);
            this.showErrorState('Błąd połączenia');
        }
    }

    displayResults(data) {
        const { results, total, query } = data;
        
        let html = '';
        
        if (results.length === 0) {
            html = `
                <div class="text-center py-4">
                    <div class="avatar-md mx-auto mb-4">
                        <div class="avatar-title bg-light text-muted fs-24 rounded-circle">
                            <i class="ri-search-line"></i>
                        </div>
                    </div>
                    <p class="text-muted">Brak wyników dla "${query}"</p>
                </div>
            `;
        } else {
            html = `
                <div class="dropdown-header">
                    <h6 class="text-overflow text-muted mb-0 text-uppercase">
                        Wyniki wyszukiwania (${total})
                    </h6>
                </div>
            `;
            
            results.forEach(result => {
                html += `
                    <a href="${result.url}" class="dropdown-item notify-item py-2">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-2">
                                <i class="${result.icon} fs-18 text-primary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">${result.title}</h6>
                                <p class="mb-0 fs-11 text-muted">${result.subtitle}</p>
                            </div>
                            ${result.badge ? `<span class="badge bg-light text-muted fs-11">${result.badge}</span>` : ''}
                        </div>
                    </a>
                `;
            });
        }

        this.updateDropdownContent(html);
        this.showDropdown();
        this.updateCloseButton();
    }

    showLoadingState() {
        const html = `
            <div class="text-center py-4">
                <div class="spinner-border text-primary" role="status">
                    <span class="visually-hidden">Wyszukiwanie...</span>
                </div>
                <p class="text-muted mt-2">Wyszukiwanie...</p>
            </div>
        `;
        
        this.updateDropdownContent(html);
        this.showDropdown();
    }

    showEmptyState() {
        const html = `
            <div class="dropdown-header">
                <h6 class="text-overflow text-muted mb-0 text-uppercase">Wyniki wyszukiwania</h6>
            </div>
            <div class="text-center py-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-primary-subtle text-primary fs-24 rounded-circle">
                        <i class="ri-search-line"></i>
                    </div>
                </div>
                <p class="text-muted">Wprowadź co najmniej 2 znaki</p>
            </div>
        `;
        
        this.updateDropdownContent(html);
        this.showDropdown();
        this.hideCloseButton();
    }

    showErrorState(message) {
        const html = `
            <div class="text-center py-4">
                <div class="avatar-md mx-auto mb-4">
                    <div class="avatar-title bg-danger-subtle text-danger fs-24 rounded-circle">
                        <i class="ri-error-warning-line"></i>
                    </div>
                </div>
                <p class="text-muted">${message}</p>
            </div>
        `;
        
        this.updateDropdownContent(html);
        this.showDropdown();
    }

    updateDropdownContent(html) {
        const simplebar = this.searchDropdown.querySelector('[data-simplebar]');
        if (simplebar) {
            simplebar.innerHTML = html;
        }
    }

    showDropdown() {
        this.searchDropdown.classList.add('show');
    }

    hideDropdown() {
        this.searchDropdown.classList.remove('show');
    }

    clearSearch() {
        this.searchInput.value = '';
        this.currentQuery = '';
        this.hideDropdown();
        this.hideCloseButton();
        
        if (this.searchTimeout) {
            clearTimeout(this.searchTimeout);
        }
    }

    updateCloseButton() {
        if (this.searchClose && this.currentQuery.length > 0) {
            this.searchClose.classList.remove('d-none');
        }
    }

    hideCloseButton() {
        if (this.searchClose) {
            this.searchClose.classList.add('d-none');
        }
    }
}

// Initialize search when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    new AssetHubSearch();
});