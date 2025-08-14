document.addEventListener('DOMContentLoaded', function () {
    // Hero Image Dropzone
    new Dropzone("#heroImageDropzone", {
        url: "{{ route('projects.store') }}",
        maxFiles: 1,
        acceptedFiles: "image/png,image/jpeg,image/gif",
        maxFilesize: 2, // MB
        paramName: "hero_image",
        autoProcessQueue: false,
        addRemoveLinks: true,
        init: function () {
            const dropzone = this;
            const form = document.querySelector('form');
            form.addEventListener('submit', function (e) {
                if (dropzone.getQueuedFiles().length > 0) {
                    e.preventDefault();
                    dropzone.processQueue();
                }
            });
        },
    });

    // Gallery Images Dropzone
    new Dropzone("#galleryImagesDropzone", {
        url: "{{ route('projects.store') }}",
        maxFiles: 10,
        acceptedFiles: "image/png,image/jpeg,image/gif",
        maxFilesize: 2, // MB
        paramName: "gallery_images",
        autoProcessQueue: false,
        addRemoveLinks: true,
        init: function () {
            const dropzone = this;
            const form = document.querySelector('form');
            form.addEventListener('submit', function (e) {
                if (dropzone.getQueuedFiles().length > 0) {
                    e.preventDefault();
                    dropzone.processQueue();
                }
            });
        },
    });

    // Project Photo Dropzone
    new Dropzone("#projectPhotoDropzone", {
        url: "{{ route('projects.store') }}",
        maxFiles: 10,
        acceptedFiles: "image/png,image/jpeg,image/gif",
        maxFilesize: 2, // MB
        paramName: "project_photos",
        autoProcessQueue: false,
        addRemoveLinks: true,
        init: function () {
            const dropzone = this;
            const form = document.querySelector('form');
            form.addEventListener('submit', function (e) {
                if (dropzone.getQueuedFiles().length > 0) {
                    e.preventDefault();
                    dropzone.processQueue();
                }
            });
        },
    });
});