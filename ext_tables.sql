CREATE TABLE tx_extension_domain_model_record
(
    uid              INT(11)                         NOT NULL AUTO_INCREMENT,
    pid              INT(11)             DEFAULT 0   NOT NULL,

    title            VARCHAR(255)        DEFAULT ''  NOT NULL,

    t3ver_oid        INT(11)             DEFAULT 0   NOT NULL,
    t3ver_wsid       INT(11)             DEFAULT 0   NOT NULL,
    t3ver_label      VARCHAR(255)        DEFAULT ''  NOT NULL,
    t3ver_state      TINYINT(4)          DEFAULT 0   NOT NULL,
    t3ver_stage      INT(11)             DEFAULT 0   NOT NULL,
    t3ver_origuid    INT(11)             DEFAULT 0   NOT NULL,
    t3ver_count      INT(11)             DEFAULT '0' NOT NULL,
    t3ver_tstamp     INT(11)             DEFAULT '0' NOT NULL,
    t3ver_move_id    INT(11)             DEFAULT '0' NOT NULL,
    sorting          INT(11)             DEFAULT 0   NOT NULL,

    tstamp           INT(11) UNSIGNED    DEFAULT '0' NOT NULL,
    crdate           INT(11) UNSIGNED    DEFAULT '0' NOT NULL,
    cruser_id        INT(11) UNSIGNED    DEFAULT '0' NOT NULL,
    deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
    hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
    starttime        INT(11) UNSIGNED    DEFAULT '0' NOT NULL,
    endtime          INT(11) UNSIGNED    DEFAULT '0' NOT NULL,
    sys_language_uid INT(11)             DEFAULT 0   NOT NULL,
    l10n_parent      INT(11) UNSIGNED    DEFAULT '0' NOT NULL,
    l10n_diffsource  MEDIUMBLOB,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY t3ver_oid (t3ver_oid, t3ver_wsid),
    KEY language (l10n_parent, sys_language_uid)
);
