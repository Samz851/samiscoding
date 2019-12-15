(function($){
    "use strict";
document.addEventListener('submit', function(data){$('#about .section-header').hide(); }, false);
//console.log(data);

var width = 1000,
    height = 800;

var projection = d3.geoMercator()
                .scale(350)
                .translate([1000, 1000]);

var path = d3.geoPath().projection(projection);

var svg = d3.select("#map").append("svg")
.attr("width", width)
.attr("height", height);

var url = "./packages/sam/theme-SAM/js/canada-topo.json"
d3.json(url, function (error, topology) {
if (error) throw error;

var geojson = topojson.feature(topology, topology.objects.canada);


svg.selectAll("path")
    .data(geojson.features)
    .enter().append("path")
    .attr("d", path)
    .style('fill', function (d) { return '#009532'; })
    .on('click', function(data){
        var content = `<div class="card" style="width: 18rem; margin: auto;">
<div class="card-body">
  <h5 class="card-title">${data.properties.NAME}</h5>
  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  <a href="#" class="card-link">Card link</a>
  <a href="#" class="card-link">Another link</a>
</div>
</div>`;
        document.getElementById('list').innerHTML = content;
        console.log(data);
    })
});


    var samModal = function() {
        $(document).ready(function(){
            $('#btn-modal').on('click', function() {
                $('#contactModal').animate({left: 0}, 300);
                console.log('done');
        });
        });

    };

    var samBackModal = function(){
        $(document).ready(function(){
            $('#contact-back').on('click', function(){
                $('#contactModal').animate({left: -2000}, 300);
            })
        })
    };


    (function samInit() {
        samModal();
        samBackModal();
    })();

})(jQuery, d3);
