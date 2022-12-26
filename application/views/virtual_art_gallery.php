<style>
#ModalBox {
    width: 210px;
    height: 269px;
    margin: 0px 15px;
    box-shadow: 2px 6px 5px 0px #0000005e;
}

#byCatogory {
    background-color: #505050;
    color: white;
}

#ModalBox>img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* margin: 20px 10px; */
    cursor: pointer;
}
</style>
<?php $categories = array(array("name"=>"Music","image"=>"https://yt3.ggpht.com/7g_D_U0pCYNlSCRIMMu-7a98wIE8h3N6hKffc3AKaniwthtkC6w562GYwZ-nRenH30tE-hZoNsg=s900-c-k-c0x00ffffff-no-rj"), array("name"=>"Gifts","image"=>"https://yt3.ggpht.com/7g_D_U0pCYNlSCRIMMu-7a98wIE8h3N6hKffc3AKaniwthtkC6w562GYwZ-nRenH30tE-hZoNsg=s900-c-k-c0x00ffffff-no-rj"),array("name"=>"Cart","image"=>"https://yt3.ggpht.com/7g_D_U0pCYNlSCRIMMu-7a98wIE8h3N6hKffc3AKaniwthtkC6w562GYwZ-nRenH30tE-hZoNsg=s900-c-k-c0x00ffffff-no-rj")); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12" style="padding: 0;">

        </div>
    </div>
</div>
<div class="row" style="margin: 10px 0;">
    <div class="col-md-12" style="padding: 20px;">
        <div class="container-fluid">
            <nav class="navbar navbar-light " style="justify-content:center">
                <form class="form-inline">
                    <button class="btn btn-sm btn-outline-secondary" id="byCatogory" type="button"
                        style="width:300px; margin:20px 10px " onclick="category()">By
                        Category</button>
                    <button class="btn btn-sm btn-outline-secondary" id="byArtist" type="button"
                        style="width:300px;margin:20px 10px " onclick="artist()">By Artist</button>
                </form>
            </nav>

            <div style="margin-top: 30px;display:flex; justify-content:center" id="categories">

                <?php  foreach ($categories as $value) {?>
                <div class="card" style="width: 6rem; margin:20px 10px"
                    onclick="byCategory('<?php echo $value['name']; ?>')">
                    <img class="card-img-top" src=<?php echo $value['image']; ?> alt="Card image cap">
                    <div class="card-body" style="padding:7px">
                        <h6 class="card-title" style="text-align:center; margin-bottom:0px">
                            <?php echo $value['name']; ?>
                        </h6>
                    </div>
                </div>
                <?php	} ?>
            </div>

            <div style="margin-top: 30px;display:none; justify-content:center" id="artists">
                <?php  foreach ($artists as $key => $value) {?>
                <div class="card" style="width: 6rem; margin:20px 10px"
                    onclick="byArtist(<?php echo $value->artistId; ?>)">
                    <img class="card-img-top"
                        src="https://yt3.ggpht.com/7g_D_U0pCYNlSCRIMMu-7a98wIE8h3N6hKffc3AKaniwthtkC6w562GYwZ-nRenH30tE-hZoNsg=s900-c-k-c0x00ffffff-no-rj"
                        alt="Card image cap">
                    <div class="card-body" style="padding:7px">
                        <h6 class="card-title" style="text-align:center; margin-bottom:0px"><?php echo $value->fname; ?>
                        </h6>
                    </div>
                </div>
                <?php	} ?>
            </div>
            <hr />
            <h1 style="text-align:center; ">Artworks</h1>
            <div style="display:flex; justify-content:center" id="artworks">
                <?php foreach ($artworks as $value) { ?>
                <div data-toggle="modal" data-target="#exampleModalCenter" id="ModalBox"
                    onclick="showArtWrk(<?php echo $value->artworkId  ?>)">
                    <img class="card-img-top" src="<?php echo base_url($value->image)  ?>" alt="artwork">
                </div>
                <?php	} ?>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:1024px">
        <div class="modal-content" style="background-color:transparent;border:none;align-items:center">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="artworkModalLongTitle" style="color:#fff"></h5> -->
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="display:flex">
                    <img id="artworkModalImage" class="card-img-top" src="" alt="artwork" style="width:500px; ">
                    <div style="padding-left: 35px">
                        <h5 class="modal-title" id="artworkModalLongTitle" style="color:#fff"></h5>
                        <p class="modal-title" id="artworkModaDescription" style="color:#fff"></p>
                    </div>

                </div>

            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
</div>
<script>
function category() {
    document.getElementById("byCatogory").style.backgroundColor = "#505050";
    document.getElementById("byCatogory").style.color = "white";
    document.getElementById("byArtist").style.backgroundColor = "white";
    document.getElementById("byArtist").style.color = "#6c757d";
    document.getElementById("artists").style.display = "none";
    document.getElementById("categories").style.display = "flex";
}

function artist() {
    document.getElementById("byCatogory").style.backgroundColor = "white";
    document.getElementById("byCatogory").style.color = "#6c757d";
    document.getElementById("byArtist").style.backgroundColor = "#505050";
    document.getElementById("byArtist").style.color = "white";
    document.getElementById("categories").style.display = "none";
    document.getElementById("artists").style.display = "flex";
}

function byArtist(artistId) {
    $.ajax({
        type: "get",
        url: "<?php echo base_url('home/get_artwork_by_artist'); ?>",
        data: {
            artistId
        },
        success: function(res) {
            if (res) {
                // document.getElementById("artworks").innerHTML = "faizan";
                let artworksDiv = document.getElementById("artworks");
                artworksDiv.innerHTML = "";
                let data = JSON.parse(res);
                data.artworks.forEach(element => {
                    artworksDiv.innerHTML += `<div data-toggle="modal" data-target="#exampleModalCenter" id="ModalBox"><img class = "card-img-top"
                    src = "<?php echo base_url()?>${element.image}"
                    alt = "artwork"
                    /></div>`;
                });

            }
        }
    });
}

function byCategory(category) {
    $.ajax({
        type: "get",
        url: "<?php echo base_url('home/get_artwork_by_category'); ?>",
        data: {
            category
        },
        success: function(res) {
            if (res) {
                // document.getElementById("artworks").innerHTML = "faizan";
                let artworksDiv = document.getElementById("artworks");
                artworksDiv.innerHTML = "";
                let data = JSON.parse(res);
                data.artworks.forEach(element => {
                    artworksDiv.innerHTML += `<div data-toggle="modal" data-target="#exampleModalCenter" id="ModalBox"><img class = "card-img-top"
                    src = "<?php echo base_url()?>${element.image}"
                    alt = "artwork"
                    /></div>`;
                });

            }
        }
    });
}

function showArtWrk(artworkId) {
    $.ajax({
        type: "get",
        url: "<?php echo base_url('home/get_artwork_by_id'); ?>",
        data: {
            artworkId
        },
        success: function(res) {
            if (res) {
                let data = JSON.parse(res);
                document.getElementById("artworkModalLongTitle").innerHTML = data.artworks[0].heading;
                document.getElementById("artworkModaDescription").innerHTML = data.artworks[0].description;
                document.getElementById("artworkModalImage").src = `<?php echo base_url()?>${data.artworks[
                    0].image}`;
            }
        }
    });
}
</script>
