"use strict";

function dragNdrop(event, previewId) {
    var files = event.target.files || event.dataTransfer.files;
    if (files.length > 0) {
        var preview = document.getElementById(previewId);
        preview.innerHTML = ""; // Clear existing preview

        for (var aUploadsImg = 0; aUploadsImg < files.length; aUploadsImg++) {
            var file = files[aUploadsImg];
            var fileName = file.name;

            // Create img element for preview
            var previewImg = document.createElement("img");
            previewImg.setAttribute("src", URL.createObjectURL(file));
            previewImg.setAttribute("alt", fileName);
            preview.appendChild(previewImg);

            // Set the file name in the input URL field
            var urlInput = document.getElementById(previewId.replace('Preview', 'URL'));
            if (urlInput) {
                urlInput.value = fileName;
            } else {
                console.error(`Input element with id "${previewId.replace('Preview', 'URL')}" not found.`);
            }
        }
    }
}

function drop(event, previewId) {
    event.preventDefault();
    var input = document.getElementById(previewId.replace('Preview', 'Upload'));
    if (input) {
        input.files = event.dataTransfer.files;
        dragNdrop({ target: input }, previewId);
    } else {
        console.error(`Input element with id "${previewId.replace('Preview', 'Upload')}" not found.`);
    }
}

// Event listeners for drag and drop
document.querySelectorAll('.dragBox').forEach(function(dragBox) {
    dragBox.addEventListener('dragover', function(event) {
        event.preventDefault();
    });
    dragBox.addEventListener('drop', function(event) {
        var previewId = dragBox.querySelector('input[type=file]').id + 'Preview';
        drop(event, previewId);
    });
});
