INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES (43, 'Inscription', NULL, 'Lancer et fermer les incriptions', 'inscription', 1);

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES (39, 1, 43);
-- Module Attribution Coach
INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES (44, 'Attribution de coach', NULL, 'Attribuer des coachs aux projets', 'attributionCoach', 30);
INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES (40, 1, 44);