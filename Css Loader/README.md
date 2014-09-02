index.html
|---[loader-wrapper]
|   o background do loader (se mantera acima de todos os 'blocos' da pagina)
|-------[loader]
|       a animação css em si
//////
main.js
|---quando o documento termina de carregar, o div [loader, loader-wrapper] tem um [.fadeOut()] de 0.3s assim tendo certeza que o $USER verá a pagina so quando terminar de carregar

