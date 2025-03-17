#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Offre
#------------------------------------------------------------

CREATE TABLE Offre(
        Offre_id            Int  Auto_increment  NOT NULL ,
        Lieu_de_Stage       Text NOT NULL ,
        Nom_de_l_entreprise Text NOT NULL ,
        Adresse             Text NOT NULL ,
        Mail                Text NOT NULL ,
        Numero_de_telephone Int NOT NULL ,
        Date_de_Stage       Int NOT NULL ,
        Horaire_de_Stage    Date NOT NULL ,
        Type_d_option_vise  Text NOT NULL
	,CONSTRAINT Offre_PK PRIMARY KEY (Offre_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        Identifiant           Int  Auto_increment  NOT NULL ,
        Mot_de_Passe          Text NOT NULL ,
        Mail                  Text NOT NULL ,
        Nom                   Text NOT NULL ,
        Prenom                Text NOT NULL ,
        Specialite            Text NOT NULL ,
        Ecole                 Text NOT NULL ,
        Numero_de_Telephone   Int NOT NULL ,
        Nom_de_l_organisation Text NOT NULL ,
        Descriptif_du_stage   Text NOT NULL ,
        Competence_Utile      Text NOT NULL ,
        Option_demande        Text NOT NULL ,
        Adresse               Text NOT NULL ,
        Nombre_de_Stagiaire   Int NOT NULL ,
        Actif                 Bool NOT NULL ,
        Classe                Text NOT NULL ,
        CV                    Text NOT NULL ,
        Lettre_de_Motivation  Text NOT NULL ,
        Offre_id              Int NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (Identifiant)

	,CONSTRAINT Utilisateur_Offre_FK FOREIGN KEY (Offre_id) REFERENCES Offre(Offre_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Message
#------------------------------------------------------------

CREATE TABLE Message(
        message_id Int  Auto_increment  NOT NULL ,
        Date_envoi Time NOT NULL ,
        Recu       Text NOT NULL ,
        Envoi      Text NOT NULL ,
        Contenu    Text NOT NULL ,
        Lu         Bool NOT NULL
	,CONSTRAINT Message_PK PRIMARY KEY (message_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Candidature
#------------------------------------------------------------

CREATE TABLE Candidature(
        id                 Int NOT NULL ,
        Offre_id           Int NOT NULL ,
        Statut             Varchar (50) NOT NULL ,
        Offre_id_est_relie Int NOT NULL ,
        Identifiant        Int NOT NULL
	,CONSTRAINT Candidature_PK PRIMARY KEY (id,Offre_id)

	,CONSTRAINT Candidature_Offre_FK FOREIGN KEY (Offre_id_est_relie) REFERENCES Offre(Offre_id)
	,CONSTRAINT Candidature_Utilisateur0_FK FOREIGN KEY (Identifiant) REFERENCES Utilisateur(Identifiant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Type utilisateur
#------------------------------------------------------------

CREATE TABLE Type_utilisateur(
        Type_id     Int  Auto_increment  NOT NULL ,
        Nom_type    Varchar (50) NOT NULL ,
        Identifiant Int NOT NULL
	,CONSTRAINT Type_utilisateur_PK PRIMARY KEY (Type_id)

	,CONSTRAINT Type_utilisateur_Utilisateur_FK FOREIGN KEY (Identifiant) REFERENCES Utilisateur(Identifiant)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Droit des utilisateurs
#------------------------------------------------------------

CREATE TABLE Droit_des_utilisateurs(
        Identifiant_id Int  Auto_increment  NOT NULL ,
        Type_de_droit  Char (5) NOT NULL
	,CONSTRAINT Droit_des_utilisateurs_PK PRIMARY KEY (Identifiant_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: peut avoir
#------------------------------------------------------------

CREATE TABLE peut_avoir(
        Identifiant_id Int NOT NULL ,
        Type_id        Int NOT NULL
	,CONSTRAINT peut_avoir_PK PRIMARY KEY (Identifiant_id,Type_id)

	,CONSTRAINT peut_avoir_Droit_des_utilisateurs_FK FOREIGN KEY (Identifiant_id) REFERENCES Droit_des_utilisateurs(Identifiant_id)
	,CONSTRAINT peut_avoir_Type_utilisateur0_FK FOREIGN KEY (Type_id) REFERENCES Type_utilisateur(Type_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: peut ecrire
#------------------------------------------------------------

CREATE TABLE peut_ecrire(
        message_id  Int NOT NULL ,
        Identifiant Int NOT NULL
	,CONSTRAINT peut_ecrire_PK PRIMARY KEY (message_id,Identifiant)

	,CONSTRAINT peut_ecrire_Message_FK FOREIGN KEY (message_id) REFERENCES Message(message_id)
	,CONSTRAINT peut_ecrire_Utilisateur0_FK FOREIGN KEY (Identifiant) REFERENCES Utilisateur(Identifiant)
)ENGINE=InnoDB;

