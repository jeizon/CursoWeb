var nomeCanal = 'einerdtv';
var upload_id;

$(document).ready(function() {
    $.get("https://www.googleapis.com/youtube/v3/channels", {
            part: 'contentDetails',
            forUsername: nomeCanal,
            key: 'AIzaSyCke91lY6SnYELGZ_6BPxvlEThhVo2lDk8'},
            function(data) {
                upload_id = data.items[0].contentDetails.relatedPlaylists.uploads;
                console.log(upload_id);
                pegarVideos(upload_id);
            }
    )
    
    function pegarVideos(id) {
        $.get("https://www.googleapis.com/youtube/v3/playlistItems", {
                    part:'snippet',
                    maxResults: 12,
                    playlistId: id,
                    key: 'AIzaSyCke91lY6SnYELGZ_6BPxvlEThhVo2lDk8'},
            function(data) {
                var imagem;
                var arquivo;
                
                $.each(data.items, function(i, item) {
                    videoId     = item.snippet.resourceId.videoId;
                    arquivo = '<li><iframe width="320" height="180" src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></li>';
                    console.log(arquivo);
                    $('div#janela ul').append(arquivo);
                });
            }
        )
    }
    
    function formatarData(data) {
        return data.substr(8,2) + '/' + data.substr(5,2) + "/" + data.substr(0,4);   
    }
});