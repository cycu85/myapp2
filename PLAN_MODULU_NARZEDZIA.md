# Plan Implementacji Modułu Narzędzia

**Status**: W realizacji  
**Data rozpoczęcia**: 2025-08-06  
**Ostatnia aktualizacja**: 2025-08-06  

## Etap 1: Fundament - Baza Danych i Podstawowe Encje ✅
- ✅ **1.1** Migracja bazy danych - tabele podstawowe
  - `tools` - główna tabela narzędzi ✅
  - `tool_categories` - kategorie (elektronarzędzia, hydrauliczne, proste) ✅
  - `tool_types` - typy (wielosztuki vs pojedyncze) ✅
- ✅ **1.2** Encje Doctrine
  - `Tool`, `ToolCategory`, `ToolType` ✅
  - Relacje między encjami ✅
- ✅ **1.3** Repozytoria z podstawowymi metodami
- ✅ **1.4** Fixtures - przykładowe dane

## Etap 2: System Przeglądów ✅
- ✅ **2.1** Migracja i encja `ToolInspection`
- ✅ **2.2** Logika biznesowa przeglądów
- ✅ **2.3** Repository dla przeglądów z metodami wyszukiwania

## Etap 3: System Zestawów ✅
- ✅ **3.1** Migracja i encje `ToolSet`, `ToolSetItem`  
- ✅ **3.2** Logika zarządzania zestawami
- ✅ **3.3** Przeględy zestawów (relacje many-to-many)

## Etap 4: CRUD - Kontrolery i Formularze ⏳
- [ ] **4.1** ToolController z podstawowymi akcjami CRUD
- [ ] **4.2** Formularze Symfony (ToolType, InspectionType, ToolSetType)
- [ ] **4.3** Walidacja i obsługa błędów
- [ ] **4.4** System uprawnień i logowanie

## Etap 5: Frontend - Szablony Twig
- [ ] **5.1** Szablony podstawowe (index, show, edit, create)
- [ ] **5.2** Interfejs zarządzania przeglądami  
- [ ] **5.3** Interfejs zestawów narzędzi
- [ ] **5.4** Responsywny design z Bootstrap

## Etap 6: Generowanie PDF - Protokoły Przekazania
- [ ] **6.1** Instalacja i konfiguracja biblioteki PDF (DomPDF/wkhtmltopdf)
- [ ] **6.2** Szablony protokołów przekazania
- [ ] **6.3** Kontroler generowania PDF
- [ ] **6.4** System podpisów elektronicznych/miejsca na podpisy

## Etap 7: System Powiadomień Email
- [ ] **7.1** Service powiadomień email
- [ ] **7.2** Szablony email dla zbliżających się przeglądów
- [ ] **7.3** Komenda Symfony dla cyklicznego sprawdzania
- [ ] **7.4** Konfiguracja cron job

## Etap 8: Powiadomienia w Topbar
- [ ] **8.1** System notyfikacji w bazie danych
- [ ] **8.2** API endpoint dla powiadomień
- [ ] **8.3** JavaScript dla dzwoneczka w topbar
- [ ] **8.4** Oznaczanie jako przeczytane

## Etap 9: Integracja z Dashboard
- [ ] **9.1** Widgety narzędzi na dashboard
- [ ] **9.2** Statystyki (ilość narzędzi, nadchodzące przeglądy)
- [ ] **9.3** Wykresy wykorzystania (opcjonalnie)

## Etap 10: Funkcjonalności Zaawansowane
- [ ] **10.1** Wielosztuki - logika ilości i śledzenia
- [ ] **10.2** Historia zmian narzędzi  
- [ ] **10.3** Export danych (CSV, Excel)
- [ ] **10.4** Filtry i wyszukiwanie zaawansowane

## Etap 11: Testy i Dokumentacja
- [ ] **11.1** Testy jednostkowe dla serwisów
- [ ] **11.2** Testy funkcjonalne kontrolerów
- [ ] **11.3** Aktualizacja dokumentacji
- [ ] **11.4** Instrukcje użytkownika

## Etap 12: Finalizacja
- [ ] **12.1** Moduł w systemie modułów (aktywacja/deaktywacja)
- [ ] **12.2** Role i uprawnienia dla modułu
- [ ] **12.3** Menu nawigacyjne
- [ ] **12.4** Migracja istniejących danych (jeśli potrzebna)

## Szacowany czas: 8-12 dni roboczych
## Priorytet: Etapy 1-5 (podstawowa funkcjonalność), następnie 6-12 (funkcje zaawansowane)

---

## Legenda statusów:
- [ ] Do zrobienia
- ⏳ W trakcie realizacji  
- ✅ Ukończone
- ❌ Anulowane/Problemy

## Historia zmian:
- **2025-08-06**: Utworzenie planu implementacji