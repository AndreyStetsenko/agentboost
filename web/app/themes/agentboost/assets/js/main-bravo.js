var $ = jQuery.noConflict();

$(document).ready(function () {
    document.addEventListener('click', function (e) {
        const target = e.target;
        if (!target.closest('.nav-menu') && !target.closest('.header__burger')) {
            $('.header__burger, .nav-menu, .header__actions').removeClass('active');
        }
        if (!target.closest('.map-filter-mobile-btn') && !target.closest('.map-navigation')) {
            $('.map-navigation').removeClass('active');
        }
        if (!e.target.closest('.map-svg')) {
            $('.map-item').attr('fill', '#ECECEC');
            $(`[data-id]`).attr('fill', '#323232');
        }
        if (!e.target.closest('.map-option-popup') && !e.target.closest('.map-item')) {
            $('.map-option-popup').removeClass('active');
        }
    })

    $(".multilevel-accordion a").click(function (e) {
        e.preventDefault();
        var link = $(this);
        var closest_ul = link.closest("ul");
        var parallel_active_links = closest_ul.find(".active")
        var closest_li = link.closest("li");
        var link_status = closest_li.hasClass("active");
        var count = 0;
        closest_ul.find("ul").slideUp(function () {
            if (++count == closest_ul.find("ul").length)
                parallel_active_links.removeClass("active");
        });

        if (!link_status) {
            closest_li.children("ul").slideDown();
            closest_li.addClass("active");
        }
    })

    $('.header__burger').click(function () {
        $('.header__burger, .nav-menu, .header__actions').toggleClass('active');
    });

    $('.map-filter-mobile-btn').click(function () {
        $('.map-navigation').toggleClass('active');
    })
    var tab = $('.tabs .tabs-items > div');
    tab.hide().filter(':first').show();



    $('.nav-menu__list-item.has-sub').mouseover(function () {
        // e.preventDefault();
        $('.nav-menu__list-item.has-sub').removeClass('active')
        $(this).addClass('active');
    })
    if ($(window).width() <= '1400') {
        $('.nav-menu__link').click(function () {
            var $this = $(this)
            var parent = $this.closest('.nav-menu__item');
            console.log('sdf')
            if (parent.hasClass('active')) {
                parent.removeClass('active');
                $this.next().slideUp(200)
            } else {
                parent.addClass('active');
                $this.next().slideDown(200)
            }
        })
        $('[data-close-menu]').click(function () {
            $(this).closest('.header__nav').removeClass('active');
            $('.header__burger').removeClass('active');
            $('body').removeClass('lock');
        })
    }

    $(window).scroll(function (e) {
        if ($(window).scrollTop() > 1) {
            $('header[data-scroll]').addClass('header--white');
        } else {
            $('header[data-scroll]').removeClass('header--white');
        }
    })
    // map function
    $('svg path.map-item').on('click', function () {
        var $this = $(this);
        var getId = $this.attr('id');
        $('.map-item').attr('fill', '#ECECEC');
        $(`[data-id]`).attr('fill', '#323232');
        $this.attr('fill', '#ED4843');
        $(`[data-id=${getId}]`).attr('fill', 'white');
        // $(`.map-option-popup`).addClass('active');
        console.log(getId);
        $(`.map-option-popup[city-id="${getId}"]`).addClass('active');
    })
    $('.close-map-poup').click(function () {
        $(this).closest('.map-option-popup').removeClass('active')
    });


    if (document.getElementById('combo-chart')) {
        const comboChart = document.getElementById('combo-chart').getContext('2d');
        const stackedLine = new Chart(comboChart, {
            type: 'bar',
            data: {
                labels: [
                    '2021 Jan',
                    '2021 Feb',
                    '2021 Mar',
                    '2021 Apr',
                    '2021 May',
                    '2021 Jun',
                    '2021 Jul',
                    '2021 Aug',
                    '2021 Sep',
                    '2021 Oct',
                    '2021 Nov',
                    '2021 Dec',
                ],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: ['192', '40', '45', '60', '80', '55', '70', '60', '25', '40', '20', '35'],
                        borderColor: '#ED4843',
                        backgroundColor: '#ED4843',
                        stack: 'combined',
                        type: 'bar',
                        borderWidth: 0,
                        borderRadius: 15,
                    },
                    {
                        label: 'Dataset 2',
                        data: [, , , , , , '15', '40', '60', '120', '50', '20'],
                        borderColor: '#0982C6',
                        backgroundColor: '#0982C6',
                        lineTension: 0,
                        stack: 'combined',
                        type: 'line',
                    }
                ]
            },
            options: {
                elements: {
                    point: {
                        pointRadius: 0
                    }
                },
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: false,
                },
                scales: {
                    x: {
                        grid: {
                            display: false,
                        },
                    }
                }
            },
        })
    }
    if (document.querySelectorAll('.chart-pie')) {
        const chartPie = document.querySelectorAll('.chart-pie');
        for (item of chartPie) {
            let itemCtx = item.getContext('2d')
            const stackedPie = new Chart(itemCtx, {
                type: 'pie',
                data: {
                    labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'],
                    datasets: [
                        {
                            label: 'Dataset 1',
                            data: ['5', '5', '17', '17', '17', '4.25', '4.25', '4.25', '4.25', '5', '5', '5', '7'],
                            backgroundColor: [
                                '#f9ac5e',
                                '#daebfc',
                                '#e2562c',
                                '#fbce89',
                                '#f98d40',
                                '#fcebb0',
                                '#579d3e',
                                '#bce395',
                                '#82c162',
                                '#ddf3bc',
                                '#518db8',
                                '#b7daf4',
                                '#75b1d5'],
                            borderColor: [
                                '#f9ac5e',
                                '#daebfc',
                                '#e2562c',
                                '#fbce89',
                                '#f98d40',
                                '#fcebb0',
                                '#579d3e',
                                '#bce395',
                                '#82c162',
                                '#ddf3bc',
                                '#518db8',
                                '#b7daf4',
                                '#75b1d5']
                            ,
                            borderWidth: 0,
                        }

                    ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: false,
                    }

                },
            })
        }
    }
    if (document.getElementById('chart-pie2')) {
        const chartPie2 = document.getElementById('chart-pie2').getContext('2d');
        const stackedPie2 = new Chart(chartPie2, {
            type: 'pie',
            data: {
                labels: ['1', '2', '3', '4', '5'],
                datasets: [
                    {
                        label: 'Dataset 1',
                        data: ['45', '30', '13', '7', '5'],
                        backgroundColor: [
                            '#75B1D5',
                            '#A1D676',
                            '#579D3E',
                            '#F9AC5E',
                            '#E2572C',],
                        borderColor: [
                            '#75B1D5',
                            '#A1D676',
                            '#579D3E',
                            '#F9AC5E',
                            '#E2572C',]
                        ,
                        borderWidth: 0,
                    }

                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: false,
                }

            },
        })
    }
    if (document.getElementById("StatusCanvas")) {
        const MeSeContext = document.getElementById("StatusCanvas").getContext("2d");
        const MeSeChart = new Chart(MeSeContext, {
            type: 'bar',
            data: {
                labels: [
                    "Tina Francis",
                    "Bessie Cooper",
                    "Guy Hawkins",
                    "Devon Lane",
                    "Courtney Henry",
                    "Cameron Williamson"
                ],
                datasets: [
                    {
                        data: [3, 1, 1, 1, 1, 1],
                        backgroundColor: '#75B1D5',
                        barPercentage: 0.5
                    }
                ]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: false,
                },
                datalabels:{
                    align: 'top',
                },
                scales: {
                    y: {
                        grid: {
                            display: false,
                        },
                    },
                    xAxes: {
                        position: 'top',
                    }
                }
            }
        })
    }
    // Клики по вкладкам.
    $('.tabs .navs a').click(function () {
        tab.hide();
        tab.filter(this.hash).show();
        $('.tabs .navs a').removeClass('navs__link--active');
        $(this).addClass('navs__link--active');
        return false;
    }).filter(':first').click();

    // Клики по якорным ссылкам.
    $('.tabs .tabs-target').click(function () {
        $('.tabs .navs a[href=' + $(this).attr('href') + ']').click();
    });

    // Отрытие вкладки из хеша URL
    // if (window.location.hash) {
    //     $('.tabs .navs a[href=' + window.location.hash + ']').click();
    //     window.scrollTo(0, $("#".window.location.hash).offset().top);
    // }
});

document.addEventListener('DOMContentLoaded', function () {
    var swiperGreed = new Swiper(".swiper-two-rows", {
        slidesPerView: 1,
        slidesPerGroup: 1,
        loopFillGroupWithBlank: true,
        grid: {
            rows: 2,
            fill: 'row'
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            type: "bullets",
            clickable: true
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
                slidesPerGroup: 2,
                grid: {
                    rows: 2,
                    fill: 'row'
                },
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
                slidesPerGroup: 3,
                grid: {
                    rows: 2,
                    fill: 'row'
                },
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 40,
                slidesPerGroup: 4,
                grid: {
                    rows: 2,
                    fill: 'row'
                },
            }
        }
    });


    function initCalendar() {
        var calendarEl = document.getElementById('report-shedule');

        if (calendarEl) {
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'title,prev,next',
                    center: 'today',
                    right: 'timeGridDay,timeGridWeek,dayGridMonth',
                },
            });

            calendar.render();
        }
    }
    initCalendar();
    function initDatePicker() {
        const pickerEl = document.querySelectorAll('.datepicker-here');

        pickerEl.forEach(function (el) {
            airDatepicker = new AirDatepicker(el, {
                locale: {
                    days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                    daysShort: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                    daysMin: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                    months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    monthsShort: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    today: 'Today',
                    clear: 'Clear',
                    dateFormat: 'MM/dd/yyyy',
                    timeFormat: 'hh:mm aa',

                    firstDay: 0
                },
                navTitles: {
                    days: 'MMMM'
                },
            });
        })
    }
    initDatePicker();



})