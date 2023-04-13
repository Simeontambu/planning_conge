/**
*Structure bdd planning leave
*/

CREATE table grade(
code_grade int not null AUTO_INCREMENT,
libelle varchar(25),
CONSTRAINT pk_grade PRIMARY KEY (code_grade)
);
CREATE TABLE fonction(
code_fonction int not null AUTO_INCREMENT,
libelle varchar(25),
CONSTRAINT pk_fonction PRIMARY KEY (code_fonction)
);
CREATE TABLE durer(
code_durer int not null AUTO_INCREMENT,
libelle varchar(25),
CONSTRAINT pk_durer PRIMARY KEY (code_durer)
);
CREATE TABLE motif(
code_motif int not null AUTO_INCREMENT,
libelle varchar(25),
CONSTRAINT pk_motif PRIMARY KEY (code_motif)
);
CREATE TABLE direction(
code_direction int not null AUTO_INCREMENT,
libelle varchar(25),
CONSTRAINT pk_direction PRIMARY KEY (code_direction)
);
CREATE TABLE agent(
matricule_agent int not null AUTO_INCREMENT,
code_grade int not null ,
code_fonction int not null ,
code_direction int not null, 
nom varchar(25),
postnom varchar(25),
prenom varchar(25),
adresse varchar(100),
telephone integer(9),
sexe varchar(1),    
CONSTRAINT pk_agent PRIMARY KEY (matricule_agent),
CONSTRAINT fk_agent_grade FOREIGN key(code_grade) REFERENCES grade(code_grade),
CONSTRAINT fk_agent_fonction FOREIGN key(code_fonction) REFERENCES fonction(code_fonction),
CONSTRAINT fk_agent_direction FOREIGN key(code_direction) REFERENCES direction(code_direction)
);
CREATE TABLE conge(
code_conge int not null AUTO_INCREMENT,
matricule_agent int not null,
code_durer int not null,
code_motif int not null,    
CONSTRAINT pk_conge PRIMARY KEY (code_conge),
CONSTRAINT fk_conge_agent FOREIGN key(matricule_agent) REFERENCES agent(matricule_agent),
CONSTRAINT fk_conge_durer FOREIGN key(code_durer) REFERENCES durer(code_durer),
CONSTRAINT fk_conge_motif FOREIGN key(code_motif) REFERENCES motif(code_motif)
);
CREATE TABLE planning(
numero_planning int not null AUTO_INCREMENT,
code_conge int not null,
matricule_agent int not null,
date_depart date,
date_retour date,    
CONSTRAINT pk_planning PRIMARY KEY (numero_planning),
CONSTRAINT fk_planning_conge FOREIGN key(code_conge) REFERENCES conge(code_conge),
CONSTRAINT fk_planning_agent FOREIGN key(matricule_agent) REFERENCES agent(matricule_agent)
);
CREATE TABLE users(
id int not null AUTO_INCREMENT,
username varchar(25),
pass varchar(25),
PRIMARY key (id)
);