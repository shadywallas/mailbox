PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE "migrations" ("id" integer not null primary key autoincrement, "migration" varchar not null, "batch" integer not null);
INSERT INTO "migrations" VALUES(1,'2014_10_12_000000_create_users_table',1);
INSERT INTO "migrations" VALUES(2,'2014_10_12_100000_create_password_resets_table',1);
INSERT INTO "migrations" VALUES(3,'2016_12_30_210231_create_mailbox_table',1);
CREATE TABLE "users" ("id" integer not null primary key autoincrement, "name" varchar not null, "email" varchar not null, "password" varchar not null, "remember_token" varchar null, "created_at" datetime null, "updated_at" datetime null);
CREATE TABLE "password_resets" ("email" varchar not null, "token" varchar not null, "created_at" datetime null);
CREATE TABLE "mailbox" ("uid" integer not null primary key autoincrement, "sender" varchar not null, "subject" varchar not null, "message" text not null, "time_sent" datetime not null);
INSERT INTO "mailbox" VALUES(21,'Ernest Hemingway','animals','This is a tale about nihilism. The story is about a combative nuclear engineer who hates animals. It starts in a ghost town on a world of forbidden magic. The story begins with a legal dispute and ends with a holiday celebration.',1459239867);
INSERT INTO "mailbox" VALUES(22,'Stephen King','adoration','The story is about a fire fighter, a naive bowman, a greedy fisherman, and a clerk who is constantly opposed by a heroine. It takes place in a small city. The critical element of the story is an adoration.',1459248747);
DELETE FROM sqlite_sequence;
INSERT INTO "sqlite_sequence" VALUES('migrations',3);
INSERT INTO "sqlite_sequence" VALUES('mailbox',26);
CREATE UNIQUE INDEX "users_email_unique" on "users" ("email");
CREATE INDEX "password_resets_email_index" on "password_resets" ("email");
CREATE INDEX "password_resets_token_index" on "password_resets" ("token");
COMMIT;
