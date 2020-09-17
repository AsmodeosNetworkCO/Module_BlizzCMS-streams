# Streams | Modulo para BlizzCMS!

Modulo para blizzCMS que te permite ver transmisiones en vivo y chatear desde el CMS .


# Caracteristicas
- Reproductor y chat de Twitch insertado en tu pagina web
- modulo para agregar canales (1 canal por cuenta & se debe estar registrado para agregarlo a la lista)
# Instalación
- Ejecuta en la base de datos de BlizzCMS el archivo (SQL/streams.sql)
- Copia en tu carpeta de modulos la carpeta application/modules/streams
- Abre el archivo application/config/routes.php y agrega estas lineas al final:

`/*Streams*/`
  
`$route[$lang.'/streams'] = 'streams/index';`

`$route[$lang.'/streams/create'] = 'streams/create';`

- abre el archivo application/modules/streams/views/index.php y en las lineas 11 y 21 reemplaza "Zuldazar-realms.tk" por tu propio dominio

```
Ejemplo:
Antes linea 11: &parent=zuldazar-realms.tk
Ahora Linea 11: &parent=tudominio.tdl
--
Antes Linea 21: chat?parent=zuldazar-realms.tk
Ahora Linea 21: chat?parent=tudominio.tdl
```
- Disfruta tu modulo
- para visualizarlo ingresa a `http://tudominio.tdl/streams`
# Capturas de Pantalla
[![Captura1](http://github.com/AsmodeosNetworkCO/Module_BlizzCMS-Streams/master/screenshots/screenshot-1.JPG "Captura1")]
[![Captura2](http://github.com/AsmodeosNetworkCO/Module_BlizzCMS-Streams/master/screenshots/screenshot-2.JPG "Captura2")]
[![Captura3](http://github.com/AsmodeosNetworkCO/Module_BlizzCMS-Streams/master/screenshots/screenshot-3.JPG "Captura3")]
[![Captura4](http://github.com/AsmodeosNetworkCO/Module_BlizzCMS-Streams/master/screenshots/screenshot-4.JPG "Captura4")]
[![Captura5](http://github.com/AsmodeosNetworkCO/Module_BlizzCMS-Streams/master/screenshots/screenshot-5.JPG "Captura5")]

# Agradecimientos
- [WoW CMS Developers](https://wow-cms.com "BlizzCMS")
- [WoW CMS Discord Members](https://discord.gg/vZG9vpS "WoW CMS Discord Members")
- [Asmodeos Network CO](https://www.asmodeosnetworkco.tk/ "Asmodeos Network CO")
- [Zuldazar Realms](https://zuldazar-realms.tk "Zuldazar Realms")
- [Sebasbrs (Desarrollador del Modulo)](https://github.com/sebasbrs "Sebasbrs (Desarrollador del Modulo)")

# Sponsor us
- [Patreon](https://patreon.com/zuldazarrealms "Patreon")
- [Ko-Fi](https://ko-fi.com/zuldazarrealms "Ko-Fi")
- [LiberaPay](https://liberapay.com/sebasbrs32 "LiberaPay")
- [Paypal](http://paypal.me/sebasgodoy1 "Paypal")
