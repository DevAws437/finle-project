document.getElementById('input_search').addEventListener('keyup', function() {
    var input = document.getElementById('input_search');
    var filter = input.value.toLowerCase();
    var table = document.getElementById('table_scr');
    var tr = table.getElementsByTagName('tr');

    for (var i = 1; i < tr.length; i++) {
        var td = tr[i].getElementsByTagName('td');
        var match = false;
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                if (td[j].innerHTML.toLowerCase().indexOf(filter) > -1) {
                    match = true;
                    break;
                }
            }
        }
        if (match) {
            tr[i].style.display = "";
        } else {
            tr[i].style.display = "none";
        }
    }
});


