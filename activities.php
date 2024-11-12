<!DOCTYPE html>
<html lang="en">

<?php include("./view/head.php"); ?>
<head>
<style>
p {
    font-size: 50px;
}

/* Lightbox styles */
.image-container img {
    cursor: pointer;
    transition: opacity 0.3s;
}

.image-container img:hover {
    opacity: 0.8;
}

.modal {
    display: none;
    position: fixed;
    z-index: 999;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    justify-content: center;
    align-items: center;
}

.modal-content {
    position: relative;
    max-width: 90%;
    max-height: 90vh;
}

.modal-content img {
    max-width: 100%;
    max-height: 90vh;
    object-fit: contain;
}

.close-button {
    position: absolute;
    top: -40px;
    right: 0;
    color: white;
    font-size: 30px;
    font-weight: bold;
    cursor: pointer;
    background: none;
    border: none;
    padding: 5px 10px;
}

.close-button:hover {
    color: #ccc;
}
</style>

<body>
    <?php include("./view/head.php"); ?>
<p>Activities in the Pacific Trails</p>

<div class="container mt-2 image-container">
    <?php
    <img class="float-left" src="project1.jpg" width="400" height="400" alt="Project 1">
    <img class="float-left float-sm-right" src="kayak.jpg" width="400" height="400" alt="Kayak">
</div>

<div class="container mt-2 image-container">
    <img class="float-left" src="hikingtrail.jpg" width="400" height="400" alt="Hiking Trail">
    <img class="float-left float-sm-right" src="beach.jpg" width="400" height="400" alt="Beach">
</div>

<!-- Modal for displaying enlarged images -->
<div id="imageModal" class="modal">
    <div class="modal-content">
        <button class="close-button">&times;</button>
        <img id="modalImage" src="" alt="Enlarged image">
    </div>
<?php } ?>
</div>

<script>
// Get DOM elements
const modal = document.getElementById('imageModal');
const modalImg = document.getElementById('modalImage');
const closeButton = document.querySelector('.close-button');

// Add click event to all images
document.querySelectorAll('.image-container img').forEach(img => {
    img.addEventListener('click', function() {
        modal.style.display = 'flex';
        modalImg.src = this.src;
        modalImg.alt = this.alt;
    });
});

// Close modal when clicking the close button
closeButton.addEventListener('click', function() {
    modal.style.display = 'none';
});

// Close modal when clicking outside the image
modal.addEventListener('click', function(event) {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

// Close modal when pressing Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        modal.style.display = 'none';
    }
});
</script>

<?php include("./view/footer.php"); ?>

</body>
</html>