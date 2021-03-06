-- DATABASE 
-- Creamos la base de datos
DROP DATABASE IF EXISTS janitza511;
CREATE DATABASE janitza511;
USE janitza511;

-- USER 
-- DROP USER IF EXISTS "garen"@"localhost";
-- Creamos el usuario para la base de datos
-- Se dropea del todo a causa de mysql no acepta "IF EXISTS"
-- DROP USER garen@localhost;
-- FLUSH PRIVILEGES;
-- CREATE USER garen@localhost  IDENTIFIED BY 'Jan1tza511';
-- GRANT ALL PRIVILEGES ON *.* TO "garen"@"localhost" WITH GRANT OPTION;
GRANT ALL ON `janitza511`.* TO 'garen'@'localhost' IDENTIFIED BY 'Jan1tza511';
FLUSH PRIVILEGES;


-- TABLES
CREATE TABLE umg511_tbl (
	_ID int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	_DAY timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
	_G_ULN_0 varchar(255),
	_G_ULN_1 varchar(255),
	_G_ULN_2 varchar(255),
	_G_ULL_0 varchar(255),
	_G_ULL_1 varchar(255),
	_G_ULL_2 varchar(255),
	_G_ILN_0 varchar(255),
	_G_ILN_1 varchar(255),
	_G_ILN_2 varchar(255),
	_G_I_SUM3 varchar(255),
	_G_PLN_0 varchar(255),
	_G_PLN_1 varchar(255),
	_G_PLN_2 varchar(255),
	_G_P_SUM3 varchar(255),
	_G_SLN_0 varchar(255),
	_G_SLN_1 varchar(255),
	_G_SLN_2 varchar(255),
	_G_S_SUM3 varchar(255),
	_G_QLN_0 varchar(255),
	_G_QLN_1 varchar(255),
	_G_QLN_2 varchar(255),
	_G_Q_SUM3 varchar(255),
	_G_COS_PHI_0 varchar(255),
	_G_COS_PHI_1 varchar(255),
	_G_COS_PHI_2 varchar(255),
	_G_FREQ varchar(255),
	_G_PHASE_SEQ varchar(255),
	_G_WH_0 varchar(255),
	_G_WH_1 varchar(255),
	_G_WH_2 varchar(255),
	_G_WH_SUML13 varchar(255),
	_G_WH_V_0 varchar(255),
	_G_WH_V_1 varchar(255),
	_G_WH_V_2 varchar(255),
	_G_WH_V_HT_SUML13 varchar(255),
	_G_WH_Z_0 varchar(255),
	_G_WH_Z_1 varchar(255),
	_G_WH_Z_2 varchar(255),
	_G_WH_Z_SUML13 varchar(255),
	_G_WH_S_0 varchar(255),
	_G_WH_S_1 varchar(255),
	_G_WH_S_2 varchar(255),
	_G_WH_S_SUML13 varchar(255),
	_G_QH_0 varchar(255),
	_G_QH_1 varchar(255),
	_G_QH_2 varchar(255),
	_G_QH_SUML13 varchar(255),
	_G_IQH_0 varchar(255),
	_G_IQH_1 varchar(255),
	_G_IQH_2 varchar(255),
	_G_IQH_SUML13 varchar(255),
	_G_CQH_0 varchar(255),
	_G_CQH_1 varchar(255),
	_G_CQH_2 varchar(255),
	_G_CQH_SUML13 varchar(255),
	_G_THD_ULN_0 varchar(255),
	_G_THD_ULN_1 varchar(255),
	_G_THD_ULN_2 varchar(255),
	_G_THD_ILN_0 varchar(255),
	_G_THD_ILN_1 varchar(255),
	_G_THD_ILN_2 varchar(255)
);
	
