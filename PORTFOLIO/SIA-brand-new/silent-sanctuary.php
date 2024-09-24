<?php
// Start the PHP block

// Define data arrays
$socialLinks = [
    'facebook' => 'https://www.facebook.com/silentsanctuaryofficial',
    'twitter' => 'https://x.com/silentsanctuary',
    'instagram' => 'https://www.instagram.com/silentsanctuaryonline/?hl=en',
    'youtube' => 'https://www.youtube.com/channel/UCzbiWVhzY6BNssUWdCKcH7g',
    'spotify' => 'https://open.spotify.com/artist/4nGp682WMiKS4X217kPw8C'
];

$infoCards = [
    ['Awards', 'Silent Sanctuary has won the Favorite Group award at the Myx Music Awards in both 2015 and 2016, and they received the In The Raw Award at the NU Rock Awards in 2006. They have also earned several nominations across different award shows, including the Awit Awards and Myx Music Awards, highlighting their influence in the Filipino music scene.'],
    ['Music Style', 'Silent Sanctuary\'s music style is a distinctive blend of rock, pop, and classical elements. The band is best known for incorporating classical string instruments like the violin and cello into their music, which gives their sound a unique, orchestral quality.'],
    ['Legacy', 'Silent Sanctuary\'s legacy is one of innovation, emotional resonance, and cultural significance. They have left an indelible mark on the Filipino music landscape, influencing both their contemporaries and future generations of musicians.'],
    ['Song album', '<p>Fuschiang Pag-Ibig (2007)</p><p>Mistaken for Granted (2009)</p><p>Monodramatic (2013)</p><p>Langit. Luha. (2015)</p><p>Silent Sanctuary (2018)</p>']
];

$albums = [
    ['images/monodramatic.jpg', 'https://www.youtube.com/playlist?list=OLAK5uy_kD7fO2YcFDOQCeFmyMgQikyph6pEKS92U'],
    ['images/MistakenForGranted.jfif', 'https://www.youtube.com/playlist?list=OLAK5uy_ldYpv4CEuMsYq6s4JfjIt7HDyobbg2zTQ'],
    ['images/FuchsiangPagibig.jfif', 'https://www.youtube.com/playlist?list=OLAK5uy_mU6nSPf6fgbAcKV7-VbBliuy9J5ybianU'],
    ['images/LangitLupa.jfif', 'https://www.youtube.com/playlist?list=OLAK5uy_li2xJ-eqly0KTt2-5tXN7Vt-NR4m7IbrU'],
    ['images/EllipsisOfTheMind.jpg', 'https://www.youtube.com/watch?v=_C5O9ROCnVA'],
    ['images/Kahimanawari.jfif', 'https://www.youtube.com/playlist?list=OLAK5uy_mectQd1yQj-09rkyzj7ReHSQ8byWiQCtk'],
    ['images/DeepCuts.jfif', 'https://www.youtube.com/playlist?list=OLAK5uy_mMqaJHNNE5jz8p2ZVdMjuHgeRX3atxq2g']
];

$members = [
    ['images/Sarkie.jpg', 'Sarkie Sarangay', 'Lead Guitarist and Vocals'],
    ['images/Chino David.jpg', 'Chino David', 'Violin'],
    ['images/Jason Rondero.jpg', 'Jason Rondero', 'Bass Guitar'],
    ['images/Allen Calixto.jpg', 'Allen Calixto', 'Drum Kit'],
    ['images/Anjo.jpg', 'Anjo Inacay', 'Cello']
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Silent Sanctuary | Kristian Lloyd Hernandez</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   
   <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            margin: auto;
            padding: 0;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
            font-style: normal;
            color: white;
            background: rgb(91,90,103);
            background: linear-gradient(165deg, rgba(91,90,103,1) 0%, rgba(0,0,0,1) 41%, rgba(172,20,20,1) 100%);   
        }

        .container {
            margin: 80px 30px 30px 30px;
        }

        .profile-card {
            background-color: #000;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            display: block;
            width: fit-content; 
            float: left;
            padding: 30px;
            margin-right: 20px;
        }

        .profile-card img {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            margin: auto;
            display: block;
        }

        #verified {
            width: 20px;
            height: auto;
            display: inline;
        }

        .genre-tag {
            background-color: #2A2A2A;
            border-radius: 20px;
            padding: 5px 10px;
        }

        .about {
            width:  300px;
            margin-top: 30px;
        }

        .about h3 {
            color: #f4f4f4;
            margin-bottom: -10px;
        }

        .info-cards {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            grid-column-gap: 20px;
            grid-row-gap: 20px;
        }

        .info-card {
            background-color: #2A2A2A;
            padding: 20px;
            border-radius: 10px;
            
        }


        .banner {
            max-width: 170vh;
        }

        #banner {
            width: 100%;
            overflow: hidden;
            display: flex;
        }

        #banner img {
            height: 100%;
            width: 100%;
            object-fit: contain;
        }

        .wrapper {
            position: absolute;
            margin: 20px;
            right: 0;
        }

        .wrapper .button {
            display: inline-block;
            height: 60px;
            width: 60px;
            margin: 0 5px;
            overflow: hidden;
            background: #fff;
            border-radius: 50px;
            cursor: pointer;
            box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease-out;
        }

        .wrapper .button:hover {
            width: 200px;
        }

        .wrapper .button .icon {
            display: inline-block;
            height: 60px;
            width: 60px;
            text-align: center;
            border-radius: 50px;
            box-sizing: border-box;
            line-height: 30px;
            transition: all 0.3s ease-out;
        }

        .wrapper .button:nth-child(1):hover .icon {
            background: #4267B2;
        }

        .wrapper .button:nth-child(2):hover .icon {
            background: #1DA1F2;
        }

        .wrapper .button:nth-child(3):hover .icon {
            background: #E1306C;
        }

        .wrapper .button:nth-child(4):hover .icon {
            background: #ff0000;
        }

        .wrapper .button:nth-child(5):hover .icon {
            background: #1DB954;
        }

        .wrapper .button .icon i {
            font-size: 25px;
            line-height: 60px;
            transition: all 0.3s ease-out;
        }

        .wrapper .button:hover .icon i {
            color: #fff;
        }

        .wrapper .button span {
            font-size: 20px;
            font-weight: 500;
            line-height: 60px;
            margin-left: 10px;
            transition: all 0.3s ease-out;
        }

        .wrapper .button:nth-child(1) span {
            color: #4267B2;
        }

        .wrapper .button:nth-child(2) span {
            color: #1DA1F2;
        }

        .wrapper .button:nth-child(3) span {
            color: #E1306C;
        }

        .wrapper .button:nth-child(4) span {
            color: #ff0000;
        }

        .wrapper .button:nth-child(5) span {
            color: #1DB954;
        }

        .wrapper .button:hover span {
            color: #fff;
        }

        .team-section {
            display: flex;
            flex-wrap: wrap;
        }

        .team-member {
            background-color: #2A2A2A;
            border-radius: 10px;
            margin: 10px;
            padding: 20px;
            text-align: center;
            width: 200px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .team-member h3 {
            margin: 0;
            color: #fff;
        }

        .team-member p.role {
            color: #aaa;
        }

        .albums {
            display: flex;
            flex-wrap: wrap;
        }

        .albums img {
            height: 250px;
            width: 250px;
            border-radius: 10px;
            margin: 10px;
        }

        .album-wrapper {
            text-align: center;
        }

        .member-title {
            text-align: center;
            color: #f4f4f4;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <div class="wrapper">
        <?php foreach ($socialLinks as $platform => $url): ?>
            <div class="button">
                <div class="icon"><i class="fab fa-<?php echo $platform; ?>"></i></div>
                <a href="<?php echo $url; ?>" target="_blank"><span><?php echo ucfirst($platform); ?></span></a>
            </div>
        <?php endforeach; ?>
    </div>

    <div id="banner">
        <h1 class="banner-title">Silent Sanctuary</h1>
        <img src="images/banner.jpg" alt="Banner">
    </div>

    <div class="container">
        <div class="profile-card">
            <img src="images/image.jfif" alt="artist-image">
            <h1>Silent Sanctuary <img src="images/verified-check-logo.png" alt="verified-logo" id="verified"></h1>
            <span class="genre-tag">Rock</span>
            <span class="genre-tag">Alternative Rock</span>
            <div class="about">
                <h3>About</h3>
                <p id="about-info">Silent Sanctuary is a Filipino rock band known for their unique fusion of classical string instruments, such as the violin and cello, with modern rock. This blend gives their music a distinctive sound that sets them apart in the OPM (Original Pilipino Music) scene.</p>
            </div>
        </div>

        <div class="info-card-container">
            <div class="info-cards">
                <?php foreach ($infoCards as $card): ?>
                    <div class="info-card">
                        <h4><?php echo $card; ?></h4>
                        <p><?php echo $card; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="album-wrapper">
        <h1>Albums</h1>
        <section class="albums">
            <?php foreach ($albums as $album): ?>
                <div>
                    <a href="<?php echo $album; ?>"><img src="<?php echo $album; ?>" alt="Album cover"></a>
                </div>
            <?php endforeach; ?>
        </section>
    </div>

    <div class="member-title"><h1>Members</h1></div>
    <div class="team-section">
        <?php foreach ($members as $member): ?>
            <div class="team-member">
                <img src="<?php echo $member; ?>" alt="<?php echo $member; ?>">
                <h3><?php echo $member; ?></h3>
                <p class="role"><?php echo $member; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

</body>
</html>
