function include(dom){const all=$("include",dom);
  for(let k=0;k<all.length;k++){let o=all[k];
    let src=$(o).attr('src');o.removeAttribute('src');
    fetch(src).then(function(file){file.text().then(function(content){ $(o).html(content); });},function(){});
  }
}
$(document).ready(function(){
    include(document);
  });
  