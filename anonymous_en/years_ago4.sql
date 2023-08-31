DROP FUNCTION IF EXISTS add_all_lang(VARCHAR(255)[], INTEGER);

CREATE OR REPLACE FUNCTION add_all_lang(names VARCHAR(255)[], first_appeared INTEGER)
RETURNS VOID AS $$
  BEGIN
    FOR i IN 1 .. array_length(names, 1) LOOP
      INSERT INTO programming(name, first_appeared)
        VALUES(names[i], first_appeared);
    END LOOP;
  END;
$$ LANGUAGE plpgsql;
