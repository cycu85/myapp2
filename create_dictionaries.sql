-- Create dictionaries table
CREATE TABLE IF NOT EXISTS dictionaries (
    id INT AUTO_INCREMENT NOT NULL,
    parent_id INT DEFAULT NULL,
    type VARCHAR(100) NOT NULL,
    name VARCHAR(255) NOT NULL,
    value VARCHAR(255) NOT NULL,
    description LONGTEXT DEFAULT NULL,
    color VARCHAR(50) DEFAULT NULL,
    icon VARCHAR(100) DEFAULT NULL,
    is_active TINYINT(1) NOT NULL DEFAULT 1,
    sort_order INT NOT NULL DEFAULT 0,
    is_system TINYINT(1) NOT NULL DEFAULT 0,
    metadata JSON DEFAULT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL,
    INDEX IDX_4E1D094A727ACA70 (parent_id),
    INDEX IDX_4E1D094A8CDE5729 (type),
    INDEX IDX_4E1D094A8CDE5729_9F75D7B0 (type, is_active),
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB;

-- Add foreign key constraint
ALTER TABLE dictionaries ADD CONSTRAINT FK_4E1D094A727ACA70 FOREIGN KEY (parent_id) REFERENCES dictionaries (id) ON DELETE CASCADE;

-- Insert sample dictionary data
SET @now = NOW();

-- Equipment Categories
INSERT INTO dictionaries (type, name, value, description, color, icon, is_active, sort_order, is_system, parent_id, created_at, updated_at) VALUES
('equipment_categories', 'Sprzęt wysokościowy', 'height_equipment', 'Sprzęt bezpieczeństwa do pracy na wysokości', '#e74c3c', 'ri-tools-line', 1, 1, 1, NULL, @now, @now),
('equipment_categories', 'Narzędzia ręczne', 'hand_tools', 'Różnego rodzaju narzędzia ręczne', '#3498db', 'ri-hammer-line', 1, 2, 1, NULL, @now, @now),
('equipment_categories', 'Elektronarzędzia', 'power_tools', 'Elektronarzędzia i urządzenia elektryczne', '#f39c12', 'ri-flashlight-line', 1, 3, 1, NULL, @now, @now),
('equipment_categories', 'Pomiary i kontrola', 'measurement_tools', 'Przyrządy pomiarowe i kontrolne', '#9b59b6', 'ri-ruler-line', 1, 4, 1, NULL, @now, @now),
('equipment_categories', 'Sprzęt warsztatowy', 'workshop_equipment', 'Większy sprzęt warsztatowy i stanowiska', '#1abc9c', 'ri-settings-3-line', 1, 5, 1, NULL, @now, @now);

-- Equipment Statuses
INSERT INTO dictionaries (type, name, value, description, color, icon, is_active, sort_order, is_system, parent_id, created_at, updated_at) VALUES
('equipment_statuses', 'Dostępny', 'available', 'Sprzęt dostępny do wypożyczenia', '#27ae60', 'ri-check-line', 1, 1, 1, NULL, @now, @now),
('equipment_statuses', 'Wypożyczony', 'borrowed', 'Sprzęt obecnie wypożyczony', '#f39c12', 'ri-user-line', 1, 2, 1, NULL, @now, @now),
('equipment_statuses', 'W naprawie', 'repair', 'Sprzęt wymaga naprawy lub konserwacji', '#e67e22', 'ri-tools-fill', 1, 3, 1, NULL, @now, @now),
('equipment_statuses', 'Zepsuto', 'broken', 'Sprzęt uszkodzony, nie nadaje się do użytku', '#e74c3c', 'ri-close-line', 1, 4, 1, NULL, @now, @now),
('equipment_statuses', 'Wycofany', 'retired', 'Sprzęt wycofany z użytkowania', '#95a5a6', 'ri-archive-line', 1, 5, 1, NULL, @now, @now);

-- Locations
INSERT INTO dictionaries (type, name, value, description, color, icon, is_active, sort_order, is_system, parent_id, created_at, updated_at) VALUES
('locations', 'Magazyn główny', 'main_warehouse', 'Główny magazyn sprzętu', '#2c3e50', 'ri-building-line', 1, 1, 1, NULL, @now, @now),
('locations', 'Warsztat', 'workshop', 'Warsztat techniczny', '#34495e', 'ri-hammer-line', 1, 2, 1, NULL, @now, @now),
('locations', 'Biuro', 'office', 'Pomieszczenia biurowe', '#3498db', 'ri-briefcase-line', 1, 3, 1, NULL, @now, @now),
('locations', 'Plac budowy A', 'construction_site_a', 'Główny plac budowy', '#e67e22', 'ri-building-2-line', 1, 4, 1, NULL, @now, @now),
('locations', 'Plac budowy B', 'construction_site_b', 'Drugi plac budowy', '#d35400', 'ri-building-3-line', 1, 5, 1, NULL, @now, @now);

-- Priorities
INSERT INTO dictionaries (type, name, value, description, color, icon, is_active, sort_order, is_system, parent_id, created_at, updated_at) VALUES
('priorities', 'Niski', 'low', 'Niski priorytet', '#95a5a6', 'ri-arrow-down-line', 1, 1, 1, NULL, @now, @now),
('priorities', 'Normalny', 'normal', 'Standardowy priorytet', '#3498db', 'ri-subtract-line', 1, 2, 1, NULL, @now, @now),
('priorities', 'Wysoki', 'high', 'Wysoki priorytet', '#f39c12', 'ri-arrow-up-line', 1, 3, 1, NULL, @now, @now),
('priorities', 'Krytyczny', 'critical', 'Priorytet krytyczny', '#e74c3c', 'ri-alert-line', 1, 4, 1, NULL, @now, @now);

-- Departments
INSERT INTO dictionaries (type, name, value, description, color, icon, is_active, sort_order, is_system, parent_id, created_at, updated_at) VALUES
('departments', 'Administracja', 'administration', 'Dział administracyjny', '#3498db', 'ri-briefcase-line', 1, 1, 1, NULL, @now, @now),
('departments', 'Produkcja', 'production', 'Dział produkcyjny', '#e67e22', 'ri-settings-line', 1, 2, 1, NULL, @now, @now),
('departments', 'Logistyka', 'logistics', 'Dział logistyki i magazynu', '#1abc9c', 'ri-truck-line', 1, 3, 1, NULL, @now, @now),
('departments', 'IT', 'it', 'Dział informatyczny', '#9b59b6', 'ri-computer-line', 1, 4, 1, NULL, @now, @now),
('departments', 'HR', 'hr', 'Dział kadr', '#e74c3c', 'ri-team-line', 1, 5, 1, NULL, @now, @now);

-- Height Equipment Subcategories (get parent ID first)
SET @height_equipment_id = (SELECT id FROM dictionaries WHERE value = 'height_equipment' LIMIT 1);

INSERT INTO dictionaries (type, name, value, description, color, icon, is_active, sort_order, is_system, parent_id, created_at, updated_at) VALUES
('equipment_categories', 'Uprząże', 'harnesses', 'Uprząże bezpieczeństwa', '#c0392b', 'ri-shield-line', 1, 1, 1, @height_equipment_id, @now, @now),
('equipment_categories', 'Hełmy', 'helmets', 'Hełmy ochronne', '#8e44ad', 'ri-shield-check-line', 1, 2, 1, @height_equipment_id, @now, @now),
('equipment_categories', 'Liny', 'ropes', 'Liny statyczne i dynamiczne', '#27ae60', 'ri-links-line', 1, 3, 1, @height_equipment_id, @now, @now),
('equipment_categories', 'Karabinki', 'carabiners', 'Karabinki i łączniki', '#f39c12', 'ri-attachment-line', 1, 4, 1, @height_equipment_id, @now, @now);

SELECT 'Dictionary system created successfully!' as message;