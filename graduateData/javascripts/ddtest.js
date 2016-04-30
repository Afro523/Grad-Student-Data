(function(d3) {
        'use strict';

        // REMOVED var data = ...

        var width = 360;
        var height = 360;
        var radius = Math.min(width, height) / 2;
        var donutWidth = 75;
        var legendRectSize = 18;
        var legendSpacing = 4;

        var color = d3.scale.category20b();

        var svg = d3.select('#chart')
          .append('svg')
          .attr('width', width)
          .attr('height', height)
          .append('g')
          .attr('transform', 'translate(' + (width / 2) + 
            ',' + (height / 2) + ')');

        var arc = d3.svg.arc()
          .innerRadius(radius - donutWidth)
          .outerRadius(radius);

        var pie = d3.layout.pie()
          .value(function(d) { return d.count; })
          .sort(null);

        d3.csv('../dataFiles/weekdays.csv', function(error, dataset) {           // NEW
          dataset.forEach(function(d) {                             // NEW
            d.count = +d.count;                                     // NEW
          });                                                       // NEW

          var path = svg.selectAll('path')
            .data(pie(dataset))
            .enter()
            .append('path')
            .attr('d', arc)
            .attr('fill', function(d, i) { 
              return color(d.data.label);
            });
            
          var legend = svg.selectAll('.legend')
            .data(color.domain())
            .enter()
            .append('g')
            .attr('class', 'legend')
            .attr('transform', function(d, i) {
              var height = legendRectSize + legendSpacing;
              var offset =  height * color.domain().length / 2;
              var horz = -2 * legendRectSize;
              var vert = i * height - offset;
              return 'translate(' + horz + ',' + vert + ')';
            });

          legend.append('rect')
            .attr('width', legendRectSize)
            .attr('height', legendRectSize)
            .style('fill', color)
            .style('stroke', color);
            
          legend.append('text')
            .attr('x', legendRectSize + legendSpacing)
            .attr('y', legendRectSize - legendSpacing)
            .text(function(d) { return d; });                       

        });                                                         // NEW
      })(window.d3);

$(document).ready(function() {
      //University Choice
    	$("#uniPart").click(function(){
        $("#campusDrop").html("<li class=\"camAll\"><a>All</a></li><li class=\"camPLV\"><a>PLV</a></li><li class=\"camNYC\"><a>NYC</a></li>");
      });
    	
     $("#uniAll").click(function(){
        $("#campusDrop").html("<li class=\"camAll\"><a>All</a></li>");
    	});

      //Campus Choice
      $("#camAll").click(function(){
        $("#campusDrop").html("<li class=\"camAll\"><a>All</a></li><li class=\"camPLV\"><a>PLV</a></li><li class=\"camNYC\"><a>NYC</a></li>");
      });

      $("#camPLV").click(function(){
        $("#campusDrop").html("<li class=\"camAll\"><a>All</a></li><li class=\"camPLV\"><a>PLV</a></li><li class=\"camNYC\"><a>NYC</a></li>");
      });

      $("#camNYC").click(function(){
        $("#campusDrop").html("<li class=\"camAll\"><a>All</a></li><li class=\"camPLV\"><a>PLV</a></li><li class=\"camNYC\"><a>NYC</a></li>");
      }); 

    $('.dropdown-toggle').dropdown();
});