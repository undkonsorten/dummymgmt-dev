#
# Table structure for table 'tx_dummymgmt_domain_model_project'
#
CREATE TABLE tx_dummymgmt_domain_model_project (

	title varchar(255) DEFAULT '' NOT NULL,
	publications int(11) unsigned DEFAULT '0' NOT NULL,
	employees int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_dummymgmt_domain_model_publication'
#
CREATE TABLE tx_dummymgmt_domain_model_publication (

	title varchar(255) DEFAULT '' NOT NULL,
	projects int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_dummymgmt_domain_model_employee'
#
CREATE TABLE tx_dummymgmt_domain_model_employee (

	name varchar(255) DEFAULT '' NOT NULL,
	projects int(11) unsigned DEFAULT '0' NOT NULL

);

#
# Table structure for table 'tx_dummymgmt_project_publication_mm'
#
CREATE TABLE tx_dummymgmt_project_publication_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_dummymgmt_project_employee_mm'
#
CREATE TABLE tx_dummymgmt_project_employee_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_dummymgmt_project_publication_mm'
#
CREATE TABLE tx_dummymgmt_project_publication_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_dummymgmt_employee__mm'
#
CREATE TABLE tx_dummymgmt_employee__mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
