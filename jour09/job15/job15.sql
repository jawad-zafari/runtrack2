  SELECT salles.nom, etage.nom 
  FROM salles 
  JOIN etage ON salles.id_etage = etage.id;
  
