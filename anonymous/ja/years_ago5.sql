DROP FUNCTION IF EXISTS add_all_lang(VARCHAR(255)[], INTEGER);

CREATE OR REPLACE FUNCTION add_all_lang(names VARCHAR(255)[], first_appeared INTEGER)
RETURNS VOID AS $$
  DECLARE
    name VARCHAR(255);
  BEGIN
    FOREACH name IN ARRAY names LOOP
      INSERT INTO programming(name, first_appeared)
        VALUES(name, first_appeared);
    END LOOP;
  END;
$$ LANGUAGE plpgsql;
