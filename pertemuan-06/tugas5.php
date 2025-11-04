<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Judul Halaman</title>
  <style>
    
#about,
#contact {
background-color: #ffffff;
border-radius: 10px;
padding: 20px;
max-width: 700px;
margin: 20px auto;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

#about h2,
#contact h2 {
color: #003366;
border-bottom: 2px solid #003366;
padding-bottom: 6px;
margin-top: 0;
margin-bottom: 16px;
}

#about p,
#contact label {
display: flex;
justify-content: flex-start;
align-items: baseline;
margin: 0;
padding: 6px 0;
border-bottom: 1px solid #e6e6e6;
}

#about strong,
#contact label>span {
min-width: 180px;
color: #003366;
font-weight: 600;
text-align: right;
padding-right: 16px;
flex-shrink: 0;
}

#contact input,
#contact textarea {
flex: 1;
border: 1px solid #ccc;
border-radius: 6px;
padding: 8px;
color: #000;
font-weight: normal;
margin: 0;
box-sizing: border-box;
}

#contact button {
margin-top: 10px;
display: inline-block;
padding: 10px 24px;
font-size: 16px;
border-radius: 6px;
cursor: pointer;
border: none;
transition: all 0.3s ease;
margin-right: 8px;
}

#contact button[type="submit"] {
background-color: #003366;
color: #fff;
font-weight: 600;
}
#contact button[type="reset"] {
background-color: #b4b4b4;
color: #272727;
font-weight: 500;
}

#contact button[type="submit"]:hover {
background-color: #0379ee;
transform: translateY(-1px);
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}
#contact button[type="reset"]:hover {
background-color: #cccccc;
transform: translateY(-1px);
}

@media (max-width: 600px) { 
#about p,
#contact label {
flex-direction: column;
align-items: flex-start;
}
#about strong,
#contact label>span {
text-align: left;
padding-right: 0;
margin-bottom: 2px;
}
#contact input,
#contact textarea,
#contact button {
width: 100%;
}
}

  </style>
</head>
<body>

<main>


  <section id="about">
    <?php
    $nim = "2511500079";
    $Nama_Lengkap = "Monica Trie Hapsari";
    $Tempat_Lahir = "Pangkalpinang";
    $Tanggal_Lahir = "13 Mei 2007";
    $hobi = "Food Hunting";
    $Pasangan = "pAda &hearts;";
    ?>
    <h2> &#128512;TENTANG SAYA&#128512; </h2>
          <p><strong>NIM:</strong><?php echo "$nim";?></p> 
          <P><strong>Nama Lengkap:</strong><?php echo "$Nama_Lengkap";?></P>
          <P><strong>Tempat lahir:</strong><?php echo "$Tempat_Lahir";?></P>
          <P><strong>Tanggal lahir:</strong><?php echo "$Tanggal_Lahir";?></P>
          <p><strong>Hobi:</strong><?php echo "$Hobi";?></p> 
            
            
   

          
           
           
          
          
           
            
          
       

          <?php
            $Pasangan = "pAda &hearts;";
          
            ?>
          <P>
            <strong>Pasangan:</strong> 
         <?php
            echo " $Pasangan"; 
            ?>
          </P>


          <?php
            $Pekerjaan = "Untuk pekerjaan saya. Saya adalah seorang freelance fotografer wedding&hearts;";
            $PEKERJAAN= "Untuk pekerjaan saya. Saya adalah seorang freelance fotografer wedding";
            $kerja= "fotografer";
            ?>
          <P>
            <strong>Pekerjaan:</strong>
            <?php
            echo " $Pekerjaan"; 
            ?>
          </P>

          <?php
            $Nama_orang_tua ="Nama Ayah saya adalah MARSITO dan Nama Ibu saya KURNIASARI&hearts;";
            $ayah= "Marsito";
            $ibu= "Kurniasari";
            ?>
          <P>
            <strong>Nama orang tua:</strong>
            <?php
            echo "$Nama_orang_tua"; 
            ?>
          </P>

          
          <?php
            $Nama_kakak = "Kebetulan saya adalah kakak dari kedua adik saya&hearts;";
            $kakak= "muazijan pratama";
            $saya= "ijan";
            ?>
          <P>
            <strong>Nama kakak:</strong>
            <?php
            echo "$Nama_kakak"; 
            ?>
          </P>

          <?php
            $Nama_adik = "AMANDA DWI RIZKI DAN HUMAIRA SALSABILA&hearts;";
            $adik_1= "AMANDA DWI RIZKI";
            $adik_2= "HUMAIRA SALSABILA";
            ?>
          <P>
            <strong>Nama adik:</strong>
            <?php
            echo "$Nama_adik"; 
            ?>
