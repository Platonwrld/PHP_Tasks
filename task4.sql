CREATE TABLE "sportsman" ("id" integer NOT NULL PRIMARY KEY AUTOINCREMENT, "name_last_father" varchar(100) NOT NULL, "email" varchar(150) NOT NULL, "number" integer NOT NULL, "birthday" date NOT NULL, "age" integer NOT NULL, "date_of_creation_entry" datetime NOT NULL, "average_place_competition" real NOT NULL, "passport_number" integer NOT NULL, "bio" text NOT NULL, "videopresentation" varchar(100) NOT NULL);
COMMIT;

SELECT "name_last_father" FROM "core_sportsman" ORDER BY "date_of_creation_entry", "average_place_competition" LIMIT 5