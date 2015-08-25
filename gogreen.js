$.ajax({
    url: 'api/locations.php',
    type: 'GET',
    data: '',
    success: function (data) {
        //called when successful
        console.log(data);
    },
    error: function (e) {
        //called when there is an error
        //console.log(e.message);
    }
});