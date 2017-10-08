/**
 * Theme: Adminox Admin Template
 * Author: Coderthemes
 * Module/App: Flot-Chart
 */

! function($) {
    "use strict";

    var FlotChart = function() {
        this.$body = $("body")
        this.$realData = []
    };

    //creates plot graph
    FlotChart.prototype.createPlotGraph = function(selector, data1, data2, data3, labels, colors, borderColor, bgColor) {
        //shows tooltip
        function showTooltip(x, y, contents) {
            $('<div id="tooltip" class="tooltipflot">' + contents + '</div>').css({
                position : 'absolute',
                top : y + 5,
                left : x + 5
            }).appendTo("body").fadeIn(200);
        }


        $.plot($(selector), [{
            data : data1,
            label : labels[0],
            color : colors[0]
        }, {
            data : data2,
            label : labels[1],
            color : colors[1]
        },
            {
                data : data3,
                label : labels[2],
                color : colors[2]
            }], {
            series : {
                lines : {
                    show : true,
                    fill : true,
                    lineWidth : 2,
                    fillColor : {
                        colors : [{
                            opacity : 0.3
                        }, {
                            opacity : 0.3
                        }, {
                            opacity: 0.3
                        }]
                    }
                },
                points : {
                    show : true
                },
                shadowSize : 0
            },

            grid : {
                hoverable : true,
                clickable : true,
                borderColor : borderColor,
                tickColor : "#f9f9f9",
                borderWidth : 1,
                labelMargin : 30,
                backgroundColor : bgColor
            },
            legend : {
                position: "ne",
                margin : [0, -32],
                noColumns : 0,
                labelBoxBorderColor : null,
                labelFormatter : function(label, series) {
                    // just add some space to labes
                    return '' + label + '&nbsp;&nbsp;';
                },
                width : 30,
                height : 2
            },
            yaxis : {
                axisLabel: "Value",
                tickColor : '#f5f5f5',
                font : {
                    color : '#bdbdbd'
                }
            },
            xaxis : {
                axisLabel: "Date",
                tickColor : '#f5f5f5',
                font : {
                    color : '#bdbdbd'
                }
            },
            tooltip : true,
            tooltipOpts : {
                content : '%s: Value of %x is %y',
                shifts : {
                    x : -60,
                    y : 25
                },
                defaultTheme : false
            },
            splines: {
                show: true,
                tension: 0.1, // float between 0 and 1, defaults to 0.5
                lineWidth: 1 // number, defaults to 2
            }
        });
    },
        //end plot graph

        //initializing various charts and components

	FlotChart.prototype.init = function() {
		//plot graph data

		var value = [[0,90],[1,110],[2,94],[3,89],[4,96],[5,100],[6,90]];
        var plabels = ["Value", "High Range", "Low Range"];
        var pcolors = ['#4489e4', '#78c350', '#f18f1c'];
        var borderColor = '#f5f5f5';
        var bgColor = '#fff';
        this.createPlotGraph("#website-stats", value, [[0,108],[6,108]],[[0,72],[6,72]], plabels, pcolors, borderColor, bgColor);

    },

	//init flotchart
	$.FlotChart = new FlotChart, $.FlotChart.Constructor =	FlotChart

}(window.jQuery),

//initializing flotchart
function($) {
	"use strict";
	$.FlotChart.init()
}(window.jQuery);