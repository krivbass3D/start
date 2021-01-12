var timerID = null,
    selectedData = date_format(new Date());
msTimeToShowPrinciple = 1000 * 5; // time in ms (1 second == 1000 milisecond)

timerID = setTimeout(showPrinciple, msTimeToShowPrinciple);

/* update Birthday users list */
calendar.onChangeDate = function(date) {
    $('.nameField').val('');

    $("#principleENG").removeClass("hide");
    $("#principleRUS").addClass("hide");
    $("#principleImages").removeClass("hide");
    $("#principleComment").addClass("hide");

    selectedData = date;
    $.post("ajax.php?action=getListOfBirthdayUsersByDate", {date:date}, function(userList, textStatus) {
        if (userList) {
            $('.birth-tr').remove();
            $('.modal-body-birsday').append(function () {
                var res = '';
                if (userList != null && userList.length != 0) {
                    for (var i = 0; i < userList.length; i++) {
                        res += [
                            '<div class="item birth-tr" style="color:black;">',
                            '<h2  align="center">' + userList[i].FIO + '</h2>',
                            '<h3  align="center">' + userList[i].Posada + '</h3>',
                            '<hr>',
                            '</div>'
                        ].join('');
                    }

                    $('.congratulation-1').remove();
                    // $('.congratulation').append('<div class="congratulation-1"><h2>ВІТАЄМО З ДНЕМ НАРОДЖЕННЯ!</h2><h3>Вітаємо та бажаємо міцного здоров’я, життєвої наснаги, добробуту, миру та затишку в сім’ї</h3></div>');
                }else{
                    res += '<h1 class="birth-tr">Ніхто в цей день не народився</h1>';
                    $('.congratulation-1').remove();
                }
                return res;
            });
            document.getElementById('bg_birsday').style.display='block'
            clearTimeout(timerID);

            //timerID = setTimeout(showPrinciple, msTimeToShowPrinciple);
        }
    }, "json");
}


// Скрипт, вызывающий модальное окно после загрузки страницы с именинниками -->
/*
  $(document).ready(function() {
    $("#ModalBirth").modal('show');
  });
*/

/* principle */
function showPrinciple() {
    $.post("ajax.php?action=getPrincipleByDate", {date:selectedData}, function(data) {
        $("#principleComment p").html([
            '<h4 class="font-bold">', data['rus'], '</h4>',
            '<p>', data['comment'], '</p>'
        ].join(''));
        $("#principleENG").attr("src","./getImage/index.php?id=" + data['id'] + "&lang=eng");
        $("#principleRUS").attr("src","./getImage/index.php?id=" + data['id'] + "&lang=rus");
        $('#myModal').modal('toggle');
    },'json');
};

$( "#principle" ).click(function() {
    $("#principleENG").toggleClass("hide");
    $("#principleRUS").toggleClass("hide");
});

$( "#getInfo" ).click(function() {
    $("#principleImages").toggleClass("hide");
    $("#principleComment").toggleClass("hide");

    $( "#getInfo" ).text( $( "#getInfo" ).text() == "Тлумачення" ? "Зображення" : "Тлумачення")
});

function date_format(date) {
    return date.getFullYear() + '-' + ('0' + (date.getMonth() + 1)).slice(-2) + '-' + ('0' + date.getDate()).slice(-2);
}

