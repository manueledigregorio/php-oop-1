<?php
  $products =[
    new Movie( 1999, 132, 'Matrix', ['azione','fantascienza'],['Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss', 'Hugo Weaving, Joe Pantoliano', 'Gloria Foster'], new Media ('matrix.jpeg', 'matrix') ),
    new Movie( 1974, 96,'pippo', ['Famiglia','divertente'],['Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss', 'Hugo Weaving, Joe Pantoliano', 'Gloria Foster'], new Media ('pippo.jpeg', 'pippo') ),
    new Movie(2010, 148,'Inception', ['azione','fantascienza','thiller'],['Keanu Reeves', 'Laurence Fishburne', 'Carrie-Anne Moss', 'Hugo Weaving, Joe Pantoliano', 'Gloria Foster'], new Media ('inception.jpeg', 'inception') ),
    new TvSerie(2001, 2010, 2, 2,'Ci pensa Rocco!', ['azione','triller','mistero'],['Rocco Siffredi'], new Media ('rocco-siffredi.webp', 'rocco')),
    new TvSerie(2001, 2016, 130, 9 ,'Winx', ['azione','erotismo','altro'],['Rocco Sif ', 'Carrie-Anne Moss'], new Media ('winx.jpg', 'rocco')),
    new TvSerie(2008, 2013, 62, 5,'Breaking Bad', ['azione','Drammatico','altro'],['Bryan Cranston ','Aaron Paul', 'Dean Norris'], new Media ('bb.jpg', 'breaking bad')),
  ];
 
?>