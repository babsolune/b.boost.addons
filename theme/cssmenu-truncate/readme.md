# How to use cssmenu-truncate
cssmenu-truncate.js is to turn an overly long horizontal menu into a collapsible one-line menu, depending on the size of the viewport (disabled under 769px)   

## Get started
add the 3 directories in theme folder  

+ link cssmenu-truncate.css in @import.css  
+ link both js files in one line in frame.tpl after # INCLUDE JS_BOTTOM #  
```
<script src="{PATH_TO_ROOT}/templates/{THEME}/js/cssmenu-truncate# IF C_CSS_CACHE_ENABLED #.min# ENDIF #.js"></script>
```    
+ add the plugin to horizontal menu in  frame.tpl after the js file
```
<script>
    jQuery('.cssmenu-horizontal > ul').truncateList({
        truncatedTitle: '{@theme.more}'
    })
</script>
```   
