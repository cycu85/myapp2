<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/modules' => [[['_route' => 'admin_modules', '_controller' => 'App\\Controller\\Admin\\AdminController::modules'], null, null, null, false, false, null]],
        '/admin/settings' => [[['_route' => 'admin_settings', '_controller' => 'App\\Controller\\Admin\\AdminController::settings'], null, null, null, false, false, null]],
        '/admin/settings/general' => [[['_route' => 'admin_settings_general', '_controller' => 'App\\Controller\\Admin\\AdminController::generalSettings'], null, null, null, false, false, null]],
        '/admin/settings/general/reset' => [[['_route' => 'admin_settings_general_reset', '_controller' => 'App\\Controller\\Admin\\AdminController::resetGeneralSettings'], null, ['POST' => 0], null, false, false, null]],
        '/admin/settings/email' => [[['_route' => 'admin_settings_email', '_controller' => 'App\\Controller\\Admin\\AdminController::emailSettings'], null, null, null, false, false, null]],
        '/admin/settings/database' => [[['_route' => 'admin_settings_database', '_controller' => 'App\\Controller\\Admin\\AdminController::databaseSettings'], null, null, null, false, false, null]],
        '/admin/settings/ldap' => [[['_route' => 'admin_settings_ldap', '_controller' => 'App\\Controller\\Admin\\AdminController::ldapSettings'], null, null, null, false, false, null]],
        '/admin/dictionaries' => [[['_route' => 'admin_dictionaries', '_controller' => 'App\\Controller\\Admin\\DictionaryController::index'], null, null, null, true, false, null]],
        '/admin/equipment-categories' => [[['_route' => 'admin_equipment_categories_index', '_controller' => 'App\\Controller\\Admin\\EquipmentCategoryController::index'], null, null, null, true, false, null]],
        '/admin/equipment-categories/new' => [[['_route' => 'admin_equipment_categories_new', '_controller' => 'App\\Controller\\Admin\\EquipmentCategoryController::new'], null, null, null, false, false, null]],
        '/admin/logs' => [[['_route' => 'admin_logs', '_controller' => 'App\\Controller\\Admin\\LogController::index'], null, null, null, true, false, null]],
        '/admin/roles' => [[['_route' => 'admin_roles_index', '_controller' => 'App\\Controller\\Admin\\RoleController::index'], null, null, null, true, false, null]],
        '/admin/roles/new' => [[['_route' => 'admin_roles_new', '_controller' => 'App\\Controller\\Admin\\RoleController::new'], null, null, null, false, false, null]],
        '/admin/users' => [[['_route' => 'admin_users_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, null, null, true, false, null]],
        '/admin/users/new' => [[['_route' => 'admin_users_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null],
            [['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/assets/css/dynamic-theme.css' => [[['_route' => 'dynamic_css', '_controller' => 'App\\Controller\\DynamicCssController::generateCss'], null, null, null, false, false, null]],
        '/equipment' => [[['_route' => 'equipment_index', '_controller' => 'App\\Controller\\EquipmentController::index'], null, null, null, true, false, null]],
        '/equipment/new' => [[['_route' => 'equipment_new', '_controller' => 'App\\Controller\\EquipmentController::new'], null, null, null, false, false, null]],
        '/equipment/my' => [[['_route' => 'equipment_my', '_controller' => 'App\\Controller\\EquipmentController::myEquipment'], null, null, null, false, false, null]],
        '/error/access-denied' => [[['_route' => 'error_access_denied', '_controller' => 'App\\Controller\\ErrorController::accessDenied'], null, null, null, false, false, null]],
        '/error/not-found' => [[['_route' => 'error_not_found', '_controller' => 'App\\Controller\\ErrorController::notFound'], null, null, null, false, false, null]],
        '/install' => [[['_route' => 'installer_welcome', '_controller' => 'App\\Controller\\InstallerController::welcome'], null, null, null, true, false, null]],
        '/install/requirements' => [[['_route' => 'installer_requirements', '_controller' => 'App\\Controller\\InstallerController::requirements'], null, null, null, false, false, null]],
        '/install/database' => [[['_route' => 'installer_database', '_controller' => 'App\\Controller\\InstallerController::database'], null, null, null, false, false, null]],
        '/install/admin' => [[['_route' => 'installer_admin', '_controller' => 'App\\Controller\\InstallerController::admin'], null, null, null, false, false, null]],
        '/install/finish' => [[['_route' => 'installer_finish', '_controller' => 'App\\Controller\\InstallerController::finish'], null, null, null, false, false, null]],
        '/profile' => [[['_route' => 'profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/api/search' => [[['_route' => 'api_search', '_controller' => 'App\\Controller\\SearchController::search'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|dictionaries/(?'
                        .'|type/([^/]++)(*:241)'
                        .'|new/([^/]++)(*:261)'
                        .'|([^/]++)/(?'
                            .'|edit(*:285)'
                            .'|delete(*:299)'
                            .'|toggle\\-status(*:321)'
                        .')'
                        .'|api/type/([^/]++)(*:347)'
                    .')'
                    .'|equipment\\-categories/(?'
                        .'|(\\d+)(*:386)'
                        .'|(\\d+)/edit(*:404)'
                        .'|(\\d+)/delete(*:424)'
                        .'|(\\d+)/toggle\\-status(*:452)'
                    .')'
                    .'|logs/(?'
                        .'|view/([^/]++)(*:482)'
                        .'|download/([^/]++)(*:507)'
                        .'|clear/([^/]++)(*:529)'
                    .')'
                    .'|roles/(?'
                        .'|(\\d+)(*:552)'
                        .'|(\\d+)/edit(*:570)'
                        .'|(\\d+)/delete(*:590)'
                    .')'
                    .'|users/(?'
                        .'|(\\d+)/roles(*:619)'
                        .'|(\\d+)(*:632)'
                        .'|(\\d+)/edit(*:650)'
                        .'|(\\d+)/toggle\\-status(*:678)'
                    .')'
                .')'
                .'|/equipment/(?'
                    .'|(\\d+)(*:707)'
                    .'|(\\d+)/edit(*:725)'
                    .'|(\\d+)/delete(*:745)'
                    .'|category/(\\d+)(*:767)'
                .')'
                .'|/((?!install|admin|api|login|logout|profile).*)(*:823)'
                .'|/tools(?'
                    .'|/(?'
                        .'|categories(?'
                            .'|(*:857)'
                            .'|/(?'
                                .'|new(*:872)'
                                .'|([^/]++)(?'
                                    .'|(*:891)'
                                    .'|/edit(*:904)'
                                    .'|(*:912)'
                                .')'
                            .')'
                        .')'
                        .'|new(*:926)'
                        .'|([^/]++)(?'
                            .'|(*:945)'
                            .'|/edit(*:958)'
                            .'|(*:966)'
                        .')'
                        .'|s(?'
                            .'|tatistics/dashboard(*:998)'
                            .'|ets(?'
                                .'|(*:1012)'
                                .'|/(?'
                                    .'|new(*:1028)'
                                    .'|([^/]++)(?'
                                        .'|(*:1048)'
                                        .'|/(?'
                                            .'|edit(*:1065)'
                                            .'|add\\-item(*:1083)'
                                            .'|item/([^/]++)/(?'
                                                .'|edit(*:1113)'
                                                .'|remove(*:1128)'
                                            .')'
                                            .'|c(?'
                                                .'|heck(?'
                                                    .'|out(*:1152)'
                                                    .'|in(*:1163)'
                                                .')'
                                                .'|lone(*:1177)'
                                            .')'
                                        .')'
                                        .'|(*:1188)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|export/csv(*:1211)'
                        .'|bulk\\-action(*:1232)'
                        .'|inspections(?'
                            .'|(*:1255)'
                            .'|/(?'
                                .'|new(*:1271)'
                                .'|tool/([^/]++)/new(*:1297)'
                                .'|([^/]++)(?'
                                    .'|(*:1317)'
                                    .'|/edit(*:1331)'
                                    .'|(*:1340)'
                                .')'
                                .'|calendar(*:1358)'
                                .'|bulk\\-schedule(*:1381)'
                            .')'
                        .')'
                        .'|types(?'
                            .'|(*:1400)'
                            .'|/(?'
                                .'|new(*:1416)'
                                .'|([^/]++)(?'
                                    .'|(*:1436)'
                                    .'|/edit(*:1450)'
                                    .'|(*:1459)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|(*:1472)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        241 => [[['_route' => 'admin_dictionaries_type', '_controller' => 'App\\Controller\\Admin\\DictionaryController::viewType'], ['type'], null, null, false, true, null]],
        261 => [[['_route' => 'admin_dictionaries_new', '_controller' => 'App\\Controller\\Admin\\DictionaryController::new'], ['type'], null, null, false, true, null]],
        285 => [[['_route' => 'admin_dictionaries_edit', '_controller' => 'App\\Controller\\Admin\\DictionaryController::edit'], ['id'], null, null, false, false, null]],
        299 => [[['_route' => 'admin_dictionaries_delete', '_controller' => 'App\\Controller\\Admin\\DictionaryController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        321 => [[['_route' => 'admin_dictionaries_toggle_status', '_controller' => 'App\\Controller\\Admin\\DictionaryController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        347 => [[['_route' => 'api_dictionaries_by_type', '_controller' => 'App\\Controller\\Admin\\DictionaryController::apiGetByType'], ['type'], ['GET' => 0], null, false, true, null]],
        386 => [[['_route' => 'admin_equipment_categories_show', '_controller' => 'App\\Controller\\Admin\\EquipmentCategoryController::show'], ['id'], null, null, false, true, null]],
        404 => [[['_route' => 'admin_equipment_categories_edit', '_controller' => 'App\\Controller\\Admin\\EquipmentCategoryController::edit'], ['id'], null, null, false, false, null]],
        424 => [[['_route' => 'admin_equipment_categories_delete', '_controller' => 'App\\Controller\\Admin\\EquipmentCategoryController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        452 => [[['_route' => 'admin_equipment_categories_toggle_status', '_controller' => 'App\\Controller\\Admin\\EquipmentCategoryController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        482 => [[['_route' => 'admin_logs_view', '_controller' => 'App\\Controller\\Admin\\LogController::view'], ['filename'], null, null, false, true, null]],
        507 => [[['_route' => 'admin_logs_download', '_controller' => 'App\\Controller\\Admin\\LogController::download'], ['filename'], null, null, false, true, null]],
        529 => [[['_route' => 'admin_logs_clear', '_controller' => 'App\\Controller\\Admin\\LogController::clear'], ['filename'], ['POST' => 0], null, false, true, null]],
        552 => [[['_route' => 'admin_roles_show', '_controller' => 'App\\Controller\\Admin\\RoleController::show'], ['id'], null, null, false, true, null]],
        570 => [[['_route' => 'admin_roles_edit', '_controller' => 'App\\Controller\\Admin\\RoleController::edit'], ['id'], null, null, false, false, null]],
        590 => [[['_route' => 'admin_roles_delete', '_controller' => 'App\\Controller\\Admin\\RoleController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        619 => [[['_route' => 'admin_users_roles', '_controller' => 'App\\Controller\\Admin\\UserController::manageRoles'], ['id'], null, null, false, false, null]],
        632 => [[['_route' => 'admin_users_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], null, null, false, true, null]],
        650 => [[['_route' => 'admin_users_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], null, null, false, false, null]],
        678 => [[['_route' => 'admin_users_toggle_status', '_controller' => 'App\\Controller\\Admin\\UserController::toggleStatus'], ['id'], ['POST' => 0], null, false, false, null]],
        707 => [[['_route' => 'equipment_show', '_controller' => 'App\\Controller\\EquipmentController::show'], ['id'], null, null, false, true, null]],
        725 => [[['_route' => 'equipment_edit', '_controller' => 'App\\Controller\\EquipmentController::edit'], ['id'], null, null, false, false, null]],
        745 => [[['_route' => 'equipment_delete', '_controller' => 'App\\Controller\\EquipmentController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        767 => [[['_route' => 'equipment_by_category', '_controller' => 'App\\Controller\\EquipmentController::byCategory'], ['id'], null, null, false, true, null]],
        823 => [[['_route' => 'app_home_root', '_controller' => 'App\\Controller\\HomeController::root'], ['path'], null, null, false, true, null]],
        857 => [[['_route' => 'app_tool_category_index', '_controller' => 'App\\Controller\\ToolCategoryController::index'], [], ['GET' => 0], null, true, false, null]],
        872 => [[['_route' => 'app_tool_category_new', '_controller' => 'App\\Controller\\ToolCategoryController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        891 => [[['_route' => 'app_tool_category_show', '_controller' => 'App\\Controller\\ToolCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        904 => [[['_route' => 'app_tool_category_edit', '_controller' => 'App\\Controller\\ToolCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        912 => [[['_route' => 'app_tool_category_delete', '_controller' => 'App\\Controller\\ToolCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_tool_new', '_controller' => 'App\\Controller\\ToolController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        945 => [[['_route' => 'app_tool_show', '_controller' => 'App\\Controller\\ToolController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        958 => [[['_route' => 'app_tool_edit', '_controller' => 'App\\Controller\\ToolController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        966 => [[['_route' => 'app_tool_delete', '_controller' => 'App\\Controller\\ToolController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        998 => [[['_route' => 'app_tool_statistics', '_controller' => 'App\\Controller\\ToolController::statistics'], [], ['GET' => 0], null, false, false, null]],
        1012 => [[['_route' => 'app_tool_set_index', '_controller' => 'App\\Controller\\ToolSetController::index'], [], ['GET' => 0], null, true, false, null]],
        1028 => [[['_route' => 'app_tool_set_new', '_controller' => 'App\\Controller\\ToolSetController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1048 => [[['_route' => 'app_tool_set_show', '_controller' => 'App\\Controller\\ToolSetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1065 => [[['_route' => 'app_tool_set_edit', '_controller' => 'App\\Controller\\ToolSetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1083 => [[['_route' => 'app_tool_set_add_item', '_controller' => 'App\\Controller\\ToolSetController::addItem'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1113 => [[['_route' => 'app_tool_set_edit_item', '_controller' => 'App\\Controller\\ToolSetController::editItem'], ['setId', 'itemId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1128 => [[['_route' => 'app_tool_set_remove_item', '_controller' => 'App\\Controller\\ToolSetController::removeItem'], ['setId', 'itemId'], ['POST' => 0], null, false, false, null]],
        1152 => [[['_route' => 'app_tool_set_checkout', '_controller' => 'App\\Controller\\ToolSetController::checkout'], ['id'], ['POST' => 0], null, false, false, null]],
        1163 => [[['_route' => 'app_tool_set_checkin', '_controller' => 'App\\Controller\\ToolSetController::checkin'], ['id'], ['POST' => 0], null, false, false, null]],
        1177 => [[['_route' => 'app_tool_set_clone', '_controller' => 'App\\Controller\\ToolSetController::clone'], ['id'], ['POST' => 0], null, false, false, null]],
        1188 => [[['_route' => 'app_tool_set_delete', '_controller' => 'App\\Controller\\ToolSetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1211 => [[['_route' => 'app_tool_export_csv', '_controller' => 'App\\Controller\\ToolController::exportCsv'], [], ['GET' => 0], null, false, false, null]],
        1232 => [[['_route' => 'app_tool_bulk_action', '_controller' => 'App\\Controller\\ToolController::bulkAction'], [], ['POST' => 0], null, false, false, null]],
        1255 => [[['_route' => 'app_tool_inspection_index', '_controller' => 'App\\Controller\\ToolInspectionController::index'], [], ['GET' => 0], null, true, false, null]],
        1271 => [[['_route' => 'app_tool_inspection_new', '_controller' => 'App\\Controller\\ToolInspectionController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1297 => [[['_route' => 'app_tool_inspection_new_for_tool', '_controller' => 'App\\Controller\\ToolInspectionController::newForTool'], ['toolId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1317 => [[['_route' => 'app_tool_inspection_show', '_controller' => 'App\\Controller\\ToolInspectionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1331 => [[['_route' => 'app_tool_inspection_edit', '_controller' => 'App\\Controller\\ToolInspectionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1340 => [[['_route' => 'app_tool_inspection_delete', '_controller' => 'App\\Controller\\ToolInspectionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1358 => [[['_route' => 'app_tool_inspection_calendar', '_controller' => 'App\\Controller\\ToolInspectionController::calendar'], [], ['GET' => 0], null, false, false, null]],
        1381 => [[['_route' => 'app_tool_inspection_bulk_schedule', '_controller' => 'App\\Controller\\ToolInspectionController::bulkSchedule'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1400 => [[['_route' => 'app_tool_type_index', '_controller' => 'App\\Controller\\ToolTypeController::index'], [], ['GET' => 0], null, true, false, null]],
        1416 => [[['_route' => 'app_tool_type_new', '_controller' => 'App\\Controller\\ToolTypeController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1436 => [[['_route' => 'app_tool_type_show', '_controller' => 'App\\Controller\\ToolTypeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1450 => [[['_route' => 'app_tool_type_edit', '_controller' => 'App\\Controller\\ToolTypeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1459 => [[['_route' => 'app_tool_type_delete', '_controller' => 'App\\Controller\\ToolTypeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1472 => [
            [['_route' => 'app_tool_index', '_controller' => 'App\\Controller\\ToolController::index'], [], ['GET' => 0], null, true, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
