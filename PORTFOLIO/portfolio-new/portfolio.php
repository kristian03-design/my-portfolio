<?php
$projects = array(
    array(
        'title' => 'Project 1',
        'image' => 'project1',
        'description' => 'My first project was a website for my favorite band...',
        'link' => 'SIA-brand-new/index.html'
    ),
    array(
        'title' => 'Project 2',
        'image' => 'project2',
        'description' => 'My Second Project, I developed a fan page for my favorite Netflix series...',
        'link' => 'SIA101/Lab1.html'
    ),
);

$navItems = array(
    'Home' => '#home',
    'About' => '#about',
    'Project' => '#projects',
    'Contact' => ''
);

$about = array(
    'email' => 'hkristianlloyd2@gmail.com',
    'role' => 'Web Developer',
    'phone' => '(+63) 970 170 4826',
    'cv' => 'CV/KristianLloyd_DC_Hernandez_CV.pdf'
);

$socialMedia = array(
    'facebook' => 'https://www.facebook.com/klqtie',
    'instagram' => 'https://www.instagram.com/kelqttt',
    'gmail' => 'mailto:hkristianlloyd2@gmail.com'
);

$projectImages = array(
    'project1' => 'images/project1.png',
    'project2' => 'images/project2.png',
    'project3' => 'images/upcoming.jpeg'
);

$footer = array(
    'copyright' => '&copy; 2024 Kristian Hernandez. All rights reserved.'
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
</head>
<body>
    <header class="header">
        <a href="" class="logo">Portfolio</a>
        <nav class="navbar">
            <?php foreach ($navItems as $label => $link) { ?>
                <a href="<?php echo $link; ?>"><?php echo $label; ?></a>
            <?php } ?>
        </nav>
    </header>

    <section id="home">
        <div class="home-content">
            <h1>Hi, I'm Kristian Hernandez</h1>
            <h3>Web Developer</h3>
            <p>I am Kristian Hernandez, a passionate and aspiring web developer, eager to grow in the
                tech industry. As a dedicated student, I've gained a knowledge and understanding of both front-end
                and back-end technologies while studying web development. Am excited to continue learning and
                apply my skills to build user-friendly, responsive websites and
                applications that make a meaningful impact.</p>
        </div>
        <div class="home-sci">
            <?php foreach ($socialMedia as $platform => $link) { ?>
                <a href="<?php echo $link; ?>">
                    <i class='bx bx-<?php echo $platform; ?>-circle'></i>
                </a>
            <?php } ?>
        </div>
        <div class="home-image">
            <img src="images/home.png" alt="Kristian Hernandez">
            <div class="blob"></div>
        </div>
    </section>

    <section id="projects">
        <div class="container">
            <h2>My Projects</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project) { ?>
                    <div class="project-card">
                        <img src="<?php echo $projectImages($project['image']); ?>" alt="<?php echo $project['title']; ?>">
                        <div class="project-info">
                            <h3><?php echo $project['title']; ?></h3>
                            <p><?php echo $project['description']; ?></p>
                            <a href="<?php echo $project['link']; ?>" class="btn" target="_blank">View Project</a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="about">
        <div class="about-container">
            <div class="content">
                <h1>About Me</h1>
                <h4 class="label">EMAIL</h4>
                <p><?php echo $about['email']; ?></p>
                <h4 class="label">ROLE</h4>
                <p><?php echo $about['role']; ?></p>
                <h4 class="label">PHONE</h4>
                <p><?php echo $about['phone']; ?></p>
                <a href="<?php echo $about['cv']; ?>" download="KristianLloyd_DC_Hernandez_CV.pdf">
                    <button class="download-cv">DOWNLOAD CV <span>&darr;</span></button>
                </a>
            </div>
            <div class="image">
                <img src="images/about-me-pic.jpg" alt="Profile Picture">
            </div>
        </div>
    </section>

    <footer>
        <p><?php echo $footer['copyright']; ?></p>
    </footer>
</body>
</html>