$(document).ready(function() {
    $.get("https://www.googleapis.com/youtube/v3/videos", {
            part: 'statistics',
            id: 'pV7pMS0xirU',
            key: 'AIzaSyCke91lY6SnYELGZ_6BPxvlEThhVo2lDk8'},
            function(data) {
                console.log(data);
            }
    )
});