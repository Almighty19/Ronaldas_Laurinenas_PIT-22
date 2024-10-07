
;(function ($, window, document, undefined) {
    "use strict";

    var pluginName = "simpleCalendar",
        defaults = {
            months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            days: ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
            events: [],
            onInit: function () {},
            onDateSelect: function () {}
        };

    function Plugin(element, options) {
        this.element = element;
        this.settings = $.extend({}, defaults, options);
        this.init();
    }

    $.extend(Plugin.prototype, {
        init: function () {
            var container = $(this.element);
            this.buildCalendar(container);
            this.settings.onInit(this);
        },
        buildCalendar: function (container) {
            var month = new Date().getMonth();
            var year = new Date().getFullYear();
            var calendar = $('<div class="calendar"></div>');
            var header = $('<h2>' + this.settings.months[month] + ' ' + year + '</h2>');
            var table = $('<table><thead><tr></tr></thead><tbody></tbody></table>');

            for (var i = 0; i < 7; i++) {
                table.find('thead tr').append('<th>' + this.settings.days[i].substring(0, 3) + '</th>');
            }

            var firstDay = new Date(year, month, 1).getDay();
            var daysInMonth = new Date(year, month + 1, 0).getDate();

            var row = $('<tr></tr>');
            for (var i = 0; i < firstDay; i++) {
                row.append('<td></td>');
            }

            for (var day = 1; day <= daysInMonth; day++) {
                row.append('<td>' + day + '</td>');
                if ((day + firstDay) % 7 === 0) {
                    table.find('tbody').append(row);
                    row = $('<tr></tr>');
                }
            }
            table.find('tbody').append(row);
            calendar.append(header).append(table);
            container.append(calendar);

            this.bindEvents(container);
        },
        bindEvents: function (container) {
            container.on('click', 'td', (e) => {
                var selectedDate = $(e.target).text();
                if (selectedDate) {
                    this.settings.onDateSelect(selectedDate);
                }
            });
        }
    });

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, "plugin_" + pluginName)) {
                $.data(this, "plugin_" + pluginName, new Plugin(this, options));
            }
        });
    };
})(jQuery, window, document);
