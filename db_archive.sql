--
-- Base de Dados: `db_archive`
--
CREATE DATABASE IF NOT EXISTS `db_archive` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_archive`;
-- --------------------------------------------------------
--
-- Estrutura da tabela `tb_albums`
--
CREATE TABLE IF NOT EXISTS `tb_albums` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `NOME` varchar(80) NOT NULL,
  `ARTISTA` varchar(80) NOT NULL,
  `ANO` varchar(4) NOT NULL,
  `GRAVADORA` varchar(80) NOT NULL,
  `CAPA` varchar(80) NOT NULL,
  PRIMARY KEY (`ID`)
) DEFAULT CHARSET = utf8;
-- ------------------------
--
-- Estrutura da tabela `tb_he`
--
--
-- Usuário BD
--
CREATE USER IF NOT EXISTS 'aluno' @'localhost' IDENTIFIED BY 'aluno';
GRANT ALL PRIVILEGES ON `db_rh`.* TO 'aluno' @'localhost';