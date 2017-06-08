/**
  cover function took from a private tracker about hentai (lol, no joke)


function getCover(event) {
  image = event.target.attributes.cover.value
  $('#coverCont img').remove()
  var coverCont = ($('#coverCont').length==0)?document.body.appendChild(document.createElement('div')):$('#coverCont')[0]
  coverCont.id = 'coverCont'
  if ($('#coverCont img').length == 0) {
    coverCont.appendChild(document.createElement('img'))
  }
  $('#coverCont img')[0].src = image?image:'images/nocover.png'
  coverCont.className = (event.clientX > (window.innerWidth/2)) ? 'left' : 'right'
  coverCont.style.display = 'block'
}
 */
 
function getCover(event) {
  var x = event.clientX;
  var y = event.clientY;
 
  image = event.target.attributes.cover.value
  $('#coverCont img').remove()
  var coverCont = ($('#coverCont').length==0)?document.body.appendChild(document.createElement('div')):$('#coverCont')[0]
  coverCont.id = 'coverCont'
  if ($('#coverCont img').length == 0) {
    coverCont.appendChild(document.createElement('img'))
  }
  $('#coverCont img')[0].src = image?image:'images/nocover.png'
  coverCont.className = (event.clientX > (window.innerWidth/2)) ? 'left' : 'right'
  coverCont.style.display = 'block'
  $('#coverCont').css('right', 'auto');
  $('#coverCont').css('left', x);
  $('#coverCont').css('top', y);
  $('#coverCont').css('border', '1px solid #fff');
}
function ungetCover(event) {
  $('#coverCont img').remove()
  coverCont.style.display = 'none'
}