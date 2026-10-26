<?php
include 'header.php';

// Hardcoded blog data for portfolio showcase
$blogs = array(
    1 => array(
        'heading' => 'Top Car Modification Trends 2023',
        'filename' => 'AdobeStock_619247421_Editorial_Use_Only-1536x1024.jpeg',
        'postby' => 'Repairo Team',
        'curdate' => '2023-07-15',
        'description' => 'The world of car modification is constantly evolving. In 2023, we are seeing some exciting trends that are transforming the way people customize their vehicles. From advanced LED lighting systems to premium leather interiors, the possibilities are endless. At Repairo, we stay ahead of the curve by incorporating the latest trends into our customization services. Whether you want a sleek modern look or a classic vintage feel, our team of experts can make your vision a reality. Some of the top trends this year include ambient lighting systems, digital dashboards, premium sound systems, and aerodynamic body kits. Contact us to learn more about how we can transform your vehicle.'
    ),
    2 => array(
        'heading' => 'Best Interior Customization Ideas',
        'filename' => 'cars24-car-interior-modification-guide-feature-1.png',
        'postby' => 'Arshdeep Singh',
        'curdate' => '2023-07-20',
        'description' => 'Your car interior is where you spend most of your driving time, so why not make it as comfortable and stylish as possible? At Repairo, we offer a wide range of interior customization options that can transform your car into a luxurious space. From premium leather seats with heating and cooling functions to state-of-the-art entertainment systems, we have everything you need. Our most popular interior modifications include recliner seats, privacy partitions with ambient lighting, center consoles with touch panel interfaces, chiller boxes with cup holders, and Sony Android LED TVs. Each modification is carefully crafted by our team of skilled artisans to ensure the highest quality and durability.'
    ),
    3 => array(
        'heading' => 'Swift Modification Guide',
        'filename' => 'swift-car-modified-best-images-4.jpg',
        'postby' => 'Repairo Team',
        'curdate' => '2023-08-01',
        'description' => 'The Maruti Suzuki Swift is one of the most popular cars in India, and it is also one of the most modified. At Repairo, we have extensive experience in customizing Swifts to make them stand out from the crowd. From body kits and spoilers to custom paint jobs and performance upgrades, we can help you create the Swift of your dreams. Our modification packages include exterior enhancements like aggressive body kits, premium alloy wheels, and custom exhaust systems, as well as interior upgrades like sport seats, racing steering wheels, and custom audio systems. Whether you want a subtle enhancement or a complete transformation, Repairo has you covered.'
    )
);

$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
$row = isset($blogs[$id]) ? $blogs[$id] : $blogs[1];
?>

<div class="container bg-light mt-5 pb-5">
    <div class='col-lg-12'>
        <div class='row text-center' >
            <h1 class='text-danger fw-bold my-4 blog-heading '><i class='fas fa-quote-left pe-2 text-danger fa-2xs' ></i><?php echo $row['heading']; ?> <i class='fas fa-quote-right pe-2 text-danger fa-2xs' ></i></h1>
        </div>
        <img class='img-fluid' width='100%' src='blogimg/<?php echo $row['filename']; ?>' />
        <p class=' mt-4'> by- <?php echo $row['postby']; ?></p>
        <hr >
        <p><i class='far fa-clock pe-2'></i><?php echo $row['curdate']; ?></p>
        <p class=' who-text justify'><?php echo $row['description']; ?></p>
    </div>
</div>

<?php
include 'footer.php';
?>