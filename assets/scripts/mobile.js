$(document).ready(function () {

    function load_js(id){
        if(!id){
            id = '';
        }
        else{
            id = '#' + id + ' ';
        }
        $(id+".dropdown-menu li").click(function(){      // ???????, ??????????? ???????? ? ????
            $(this).parents('.btn-group').find('.dropdown-toggle').html($(this).text());
            if (!obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')]){
                obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')] = {};
            }
            obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')][$(this).parents('.btn-group').find('.dropdown-toggle').attr('data-id')] = $(this).attr('data-value');
            var next = $(this).parents('.btn-group.dropdownBoil.orange').removeClass('orange').next();
            if (next.prop("tagName").toLowerCase() == 'img'){
                next.remove();
            }
        });

        $(id+'.boxArea.firstForm').change(function(){
            if (!obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')]){
                obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')] = {};
            }
            obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')][$(this).attr('data-id')] = $(this).val() ;
        });

        $(id+'.dropdown-menu li:last-child').hover(function(){         // ???????, ??? ????????? li
            $(this).addClass('borderRadiusLastLi');
        },function(){
            $(this).removeClass('borderRadiusLastLi');
        });

        $(id+'div.btn-group.dropdownBoil').on('show.bs.dropdown', function () {        // ???????, ????? ?????? ??? ????????
            $(this).children('button.boxArray').removeClass('boxArray').addClass('blueBack');
            $(this).children('.dropdown-toggle').addClass('textFieldRadius');
            $(this).addClass('noShadow');
        });

        $(id+'div.btn-group.dropdownBoil').on('hide.bs.dropdown', function () {        // ???????, ????? ?????? ??? ????????
            $(this).children('button.blueBack').removeClass('blueBack').addClass('boxArray');
            $(this).children('.dropdown-toggle').removeClass('textFieldRadius');
            $(this).removeClass('noShadow');
        });

        $(id+'button').mouseout(function(){
            $(this).focusout();
        });

        $(id+'div#serviceProviders .boxArea').change(function(){
            if($(this).val()!=''){
                if (!obj[$(this).parents('.tabService').attr('id')]){
                    obj[$(this).parents('.tabService').attr('id')] = {};
                }
                obj[$(this).parents('.tabService').attr('id')][$(this).attr('name')] = $(this).val() ;
                $(this).removeClass('orange');
            }
            else{
                $(this).addClass('orange');
            }
        });

        $(id+'div#serviceBoxBack .boxArea').change(function(){
            if($(this).val()!=''){
                if (!obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')]){
                    obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')] = {};
                }
                obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')][$(this).attr('name')] = $(this).val() ;
                $(this).removeClass('orange');
            }
            else{
                $(this).addClass('orange');
            }
        });


        $(id+'button.resultButtonService').click(function(){
            if ($(this).parent().siblings('.orange').length > 0){
                alertModal ($(this),true);
            }
            else{
                var link = 'mailto:sales@servicestart.co.uk?subject=SERVICE PROVIDERS: from ' +
                    obj[$(this).parents('.tabService').attr('id')].companyName +
                    '&body=' +
                    'User Name: ' + obj[$(this).parents('.tabService').attr('id')].userName + '%0D%0A' +
                    'Company Name: ' + obj[$(this).parents('.tabService').attr('id')].companyName + '%0D%0A' +
                    'User Email: ' + (obj[$(this).parents('.tabService').attr('id')].userEmail || '') + '%0D%0A' +
                    'User Phone: ' + obj[$(this).parents('.tabService').attr('id')].userPhone + '%0D%0A' +
                    'Additional text: ' + (obj[$(this).parents('.tabService').attr('id')].moreInfo || '') + '%0D%0A';
                window.location.href = link;
                delete obj[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')];
                $('div#serviceProviders').html(obj.content[$(this).parents('.item.carousel-indicators-bottom.active').attr('id')]);
                load_js();
            }
        });

    }

    function isIEOrEdge() {
        var ua = window.navigator.userAgent;

        var msie = ua.indexOf('MSIE ');
        if (msie > -1) {
            return true;
        }

        var trident = ua.indexOf('Trident/');
        if (trident > -1) {
            return true;
        }

        var edge = ua.indexOf('Edge/');
        if (edge > -1) {
           return true;
        }

        // other browser
        return false;
    }

    //bind listener globally
    var bindEvents = function() {
        if (isIEOrEdge()) {
          $(document).on('keyup', '.inputField', function() {
            this.change();
          });
        };

        $(document).on('change', '.inputField', function(){
            var el = $(this),
                eVal = el.val().trim();

            if(eVal.length > 0){
                if (el.attr('name') == 'userEmail'){
                    var pattern = /^[0-9a-z]+[-\._0-9a-z]*@[0-9a-z]+[-\._^0-9a-z]*[0-9a-z]+[\.]{1}[a-z]{2,6}$/i;
                    if (!pattern.test(el.val())){
                        el.addClass('orange');
                        if(el.next().prop("tagName").toLowerCase() != 'img'){
                            el.after('<img src="/assets/images/alert.png" class="alertBox alertInput">');
                        }
                        return;
                    }
                }
                obj['quote'][el.attr('name')] = eVal;
                el.removeClass('orange').next('.alertBox').remove();
            }
            else{
                el.addClass('orange');
                el.after('<img src="/assets/images/alert.png" class="alertBox alertInput">');
            }
        });
        
        $(document).on('click', 'button.nextButton', function(){
            var btn = $(this);

            if ($('.inputField.orange, .dropdownBoil.orange').length > 0){
                alertModal (btn);
            }

            else{
                //clear out the first form
                btn.parent().find('input, button, label, img').hide();
                btn.siblings('.firstForm').remove();

                btn.parent().append('<div class="row field-group"> \
			        <label class="boxText inputLabel">Kontaktperson</label> \
                    <input type="text" placeholder="Namn på kontaktperson" name="userName" class="boxArea inputField orange"> \
                    <label class="boxText inputLabel">Epostadress</label> \
                    <input type="text" placeholder="Epostadress att kontakta" name="userEmail" class="boxArea inputField orange"> \
                    <label class="boxText inputLabel">Mobiltelefon</label> \
                    <input type="text" placeholder="Mobiltelefon till kontaktperson" name="userPhone" class="boxArea inputField orange"> \
                    <label class="boxText inputLabel">Övrig information till oss</label> \
                    <textarea placeholder="Skriv övrig info som kan vara relevant" name="additionalInfo" class="boxArea inputField orange"></textarea> \
                    <button class="boxButton resultButton"> \
                    <img src="/assets/images/click.png" class="boxButtonImage">Ge mig en offert</button>');

                btn.off('click');
                btn.remove();
            }
        });

        $(document).on('click', 'button.resultButton', function(){
            var resultBtn = $(this);
            if($('.inputField.orange, .dropdownBoil.orange').length > 0){
                alertModal (resultBtn);
            }
            else{
                request(resultBtn.parent().attr('id'));
            }
        });
    };

    load_js();
    bindEvents();

    // ????????. ???????? ?????????????? ??????? + ????? ??????
    $('#collapseBrands').on('show.bs.collapse', function () {
        $('#brandCollapse').removeClass('footerButtonClose').addClass('footerButtonOpen');
    });

    $('#collapseBrands').on('hide.bs.collapse', function () {
        $('#brandCollapse').removeClass('footerButtonOpen').addClass('footerButtonClose');
    });


    // ????????. ???????? ???????? Faq
    $('.collapse.faqAnswer').on('show.bs.collapse', function () {
        $(this).siblings('.faqImg').attr('src','/assets/images/minus.png').addClass('faqImgMinus');
        $(this).siblings('.faqQuestion').addClass('faqQuestionOpen');
    });

    $('.collapse.faqAnswer').on('hide.bs.collapse', function () {
        $(this).siblings('.faqImg').attr('src','/assets/images/plus.png').removeClass('faqImgMinus');
        $(this).siblings('.faqQuestion.faqQuestionOpen').removeClass('faqQuestionOpen');
    });

    // ????????. ???????? Articles
    $('.collapse.articlesCol').on('show.bs.collapse', function (event) {
        if ((event.target.getAttributeNode('class').value == 'collapse articlesCol') || (event.target.getAttributeNode('class').value == 'articlesCol collapse')) {
            $(this).siblings('.faqImg.articlePlus').attr('src','/assets/images/minus.png').addClass('faqImgMinus');
        }
    });

    $('.collapse.articlesCol').on('hide.bs.collapse', function () {
        if ((event.target.getAttributeNode('class').value == 'articlesLink articlesMar') || (event.target.getAttributeNode('class').value == 'faqImg articlePlus faqImgMinus')){
            $(this).siblings('.faqImg.articlePlus').attr('src','/assets/images/plus.png').removeClass('faqImgMinus');
        }
    });

    // ????????. ???????? Articles
    $('.collapse.articlesColIn').on('show.bs.collapse', function () {
        $(this).siblings('.faqImg.articlePlusIn').attr('src','/assets/images/minus.png').addClass('faqImgMinus');
    });

    $('.collapse.articlesColIn').on('hide.bs.collapse', function () {
        $(this).siblings('.faqImg.articlePlusIn').attr('src','/assets/images/plus.png').removeClass('faqImgMinus');
    });

    // ???????? ???????? ???? ? ?????, ????? ??????, ??????? ?? ???????
    $('#menu').on('show.bs.collapse', function () {
        $('.lines').addClass('linesOpen');
    });

    $('#menu').on('hide.bs.collapse', function () {
        $('.lines.linesOpen').removeClass('linesOpen');
    });
    $('#menu li').click(function(){
        window.location.href = $(this).attr('data-href');
    });

    // ????????, ????????
    $('#carousel').carousel({           // ????
        interval: 0
    });

    $('#carouselSays').carousel({       // ???? "??? ???? ??????? ? ???"
        interval: 2000
    });

    /*// ??????????? ??????? ????????? ????
    $('#navigatorTitle').html(($('.item.carousel-indicators-bottom.active').attr('data-title')));

    // ????? ????????? ????
    $('#carousel').on('slid.bs.carousel', function () {
        $('#navigatorTitle').html(($('.item.carousel-indicators-bottom.active').attr('data-title')));
    });*/

    var obj={
        content:{
            serviceProviders: $('#serviceProviders').html()
        },
        'quote': {}
    };

    $('.box .item.carousel-indicators-bottom').each(function(index){
        obj.content[$(this).attr('id')] = $(this).html();
    });

    function alertModal(item, service){
        if (item.siblings('.modal_form').length == 0){
            window.setTimeout(function(){
                if (service){
                    item.parents('.item.carousel-indicators-bottom.active').prepend('<div class="modal_form modal_form_service"><img src="/assets/images/cross.png" class="modal_close"><img src="/assets/images/alertInput.png" class="alertImg"><span class="alertTitle">Oj, du misssade n&aring;got...</span><span class="alertText">F&ouml;r att du ska f&aring; bra svar p&aring; din f&ouml;rfr&aring;gan beh&ouml;ver vi uppgifter i alla f&auml;lt. V&auml;nligen <a class="modal_close_a">f&ouml;rs&ouml;k igen</a></span></div>');
                }
                else{
                    item.parents('.item.carousel-indicators-bottom.active').prepend('<div class="modal_form"><img src="/assets/images/cross.png" class="modal_close"><img src="/assets/images/alertInput.png" class="alertImg"><span class="alertTitle">Oj, du misssade n&aring;got...</span><span class="alertText">F&ouml;r att du ska f&aring; bra svar p&aring; din f&ouml;rfr&aring;gan beh&ouml;ver vi uppgifter i alla f&auml;lt. V&auml;nligen <a class="modal_close_a">f&ouml;rs&ouml;k igen</a></span></div>');
                }
                var id = item.parents('.item.carousel-indicators-bottom.active').attr('id');
                $('#'+id+' .modal_close, #'+id+' .modal_close_a').click( function(){
                    $('#'+id+' .modal_form').remove();
                });
            },500)
        }
    }

    function okModal(){
        $('body').prepend('<div class="modal_form_success"><img src="/assets/images/cross.png" class="modal_close_success"><img src="/assets/images/ok.png" class="alertImg"><span class="alertTitle">Tack för ditt meddelande!</span><span class="alertText">Vi kontaktar dig inom kort.</span></div><div class="overlay"></div>');
        $('.modal_form_success').animate({opacity: 1, top: '50%'}, 400);
        $('.modal_close_success, .overlay').click( function(){
            $('.modal_form_success')
                .animate({opacity: 0, top: '45%'}, 400,
                function(){
                    $(this).remove();
                    $('.overlay').remove();
                }
            );
        });
    }

   // var addJs = false;

    function request(e){
        var shortcut = '';
            locationId = '',
            locationShortCut = '',
            userName = '',
            userPassword = '',
            userPhone = '',
            userEmail = '',
            additionalInfo = '',
            affiliateId = '913',
            serviceId = $('div#'+e).attr('data-serviceId'),
            md5Key = 'logicw913',
            timestamp = moment.utc().add(1, 'hours').format("DD/MM/YYYY HH:mm:ss")+' CET',
            nodes = '<nodes>';

        for (var key in obj['quote']){
            switch (key) {
                case 'locationShortCut':
                    locationShortCut = obj['quote'][key];
                    break;
                case 'userPhone':
                    userPhone = obj['quote'][key];
                    break;
                case 'userEmail':
                    userEmail = obj['quote'][key];
                    break;
                case 'userName':
                    userName = obj['quote'][key];
                case 'additionalInfo':
                    additionalInfo = obj['quote'][key];
                    break;
                default:
                    nodes += '<node><code>' + key + '</code><description>' + obj['quote'][key] + '</description></node>';
            }
        }

        var md5Hash = CryptoJS.MD5(affiliateId + timestamp + shortcut + serviceId + locationId + locationShortCut + userEmail + md5Key).toString(CryptoJS.enc.Hex);
        var resultXml = '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>'+
            '<request>' +
            (affiliateId ? '<affiliateId>' + affiliateId + '</affiliateId>':'<affiliateId/>') +
            '<timeStamp>' + timestamp + '</timeStamp>'+
            '<md5Hash>' + md5Hash + '</md5Hash>'+
            (serviceId ? '<serviceId>' + serviceId + '</serviceId>':'<serviceId/>') +
            '<country>GB</country>'+
            '<language>en</language>'+
            (locationId ? '<locationId>' + locationId + '</locationId>':'<locationId/>') +
            (locationShortCut ? '<locationShortCut>' + locationShortCut + '</locationShortCut>':'<locationShortCut/>') +
            '<buyerType>PRIVATE_INDIVIDUAL</buyerType>'+
            '<startDate>PROJECT_START_1_WEEK</startDate>'+
            nodes + '</nodes>'+
            (userEmail ? '<userEmail>' + userEmail + '</userEmail>':'<userEmail/>') +
            (userPassword ? '<userPassword>' + userPassword + '</userPassword>':'<userPassword/>') +
            (userName ? '<userName>' + userName + '</userName>':'<userName/>') +
            (userPhone ? '<userPhone>' + userPhone + '</userPhone>':'<userPhone/>') +
            (additionalInfo ? '<additionalInfo>' + additionalInfo + '</additionalInfo>':'<additionalInfo/>') +
            '</request>';


/*        if (!addJs){
            var jsGC = document.createElement("script");
            jsGC.setAttribute("language", "JavaScript");
            jsGC.type = 'text/javascript';
            jsGC.innerHTML = '<!--' +
                'var google_conversion_id = 1058540605;' +
            'var google_conversion_language = "en_GB";' +
            'var google_conversion_format = "3";' +
            'var google_conversion_color = "ffffff";' +
            'var google_conversion_label = "rYPkCJWBfBC9mOD4Aw";' +
            'var google_conversion_value = 0;' +
            '//-->';
            document.body.appendChild(jsGC);

            var jsLib = document.createElement("script");
            jsLib.setAttribute("language", "JavaScript");
            jsLib.src = 'http://www.googleadservices.com/pagead/conversion.js';
            document.body.appendChild(jsLib);

            var noJs = document.createElement("noscript");

            var img = document.createElement("img");
            img.setAttribute("height","1");
            img.setAttribute("width","1");
            img.setAttribute("border","0");
            img.setAttribute("src","http://www.googleadservices.com/pagead/conversion/1058540605/?label=rYPkCJWBfBC9mOD4Aw&amp;script=0");
            noJs.appendChild(img);
            document.body.appendChild(noJs);

            addJs = true;
        }*/

        var a = document.createElement('a');
            a.href = window.location.href;
        var hostname = a.hostname,
            baseUrl = 'http://' + hostname + '/assets/scripts/';
        $.ajax({
            type: "POST",
            url: baseUrl + 'mailer.php',
            data: 'xml='+resultXml,
            success: function(data){
                if (data === 'OK'){
                    obj['quote'] = {};
                    $('div#'+e).html(obj.content[e]);
                    load_js();
                    goog_report_conversion();
                    okModal();
                }
                else {
                    alertModal($('.item.carousel-indicators-bottom.active button.boxButton'));
                }
            },
            error: function(){
                alert('An error has occurred. For detailed error information, please contact Administrator');
            }
        });
    }
});