DROP FUNCTION IF EXISTS era(INTEGER);

CREATE OR REPLACE FUNCTION era(first_appeared INTEGER)
RETURNS TEXT AS $$
  BEGIN
    IF first_appeared < 1990 THEN
      RETURN 'ancient';
    ELSEIF first_appeared >= 1990 AND first_appeared < 2000 THEN
      RETURN 'middle';
    ELSE
      RETURN 'modern';
    END IF;
  END;
$$ LANGUAGE plpgsql;
