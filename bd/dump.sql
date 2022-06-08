CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL, PRIMARY KEY (`usuario_id`)
);

INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`) VALUES (1,'rafael.berlato','202cb962ac59075b964b07152d234b70');
INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`) VALUES (2,'luana.matias',  '202cb962ac59075b964b07152d234b70');