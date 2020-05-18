INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES (43, 'Inscription', NULL, 'Lancer et fermer les incriptions', 'inscription', 1);

INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES (39, 1, 43);
-- Module Attribution Coach
INSERT INTO `module` (`id`, `name`, `icon`, `description`, `action_url`, `sub_module`) VALUES (44, 'Attribution de coach', NULL, 'Attribuer des coachs aux projets', 'attributionCoach', 30);
INSERT INTO `module_role` (`id`, `role_id`, `module`) VALUES (40, 1, 44);

--Alter Table Equipe
ALTER TABLE `equipe` ADD `user` INT NULL AFTER `pays`, ADD INDEX (`user`);
ALTER TABLE `equipe` ADD FOREIGN KEY (`user`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--MAJ
ALTER TABLE `projet` ADD `date_post` DATETIME on update CURRENT_TIMESTAMP NOT NULL AFTER `statut`;

--MAJ note
ALTER TABLE `note` ADD `created_by` INT NOT NULL AFTER `projet`, ADD `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP AFTER `created_by`, ADD `update_by` INT NULL AFTER `created_at`, ADD `update_at` DATETIME NULL AFTER `update_by`, ADD INDEX (`created_by`), ADD INDEX (`update_by`);
ALTER TABLE projet DROP FOREIGN KEY projet_ibfk_2;
`ALTER TABLE ``projet`` DROP INDEX ``user``;`
`ALTER TABLE ``projet`` DROP INDEX ``user``;`