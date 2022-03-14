# How to use bbcode-context
bccode-context.js turn the list of bbcode icons into a context menu, usable with the right click  

The list of icons is hidden by the plugin  
### reveal list:  
the list is revealed when you release the mouse button:

+ with the right mouse button if you press more than 0.3s
+ with the left mouse button if you have highlighted some text in the textarea

### hide list

+ with the left button without selecting text
+ by using icon actions in bbcode

### Default context menu
As you have to press right click more than 0.3s to use the plugin, you can use the default context menu if you press it less than 0.3s .  
It will close the bbcode menu if it's open.

## Get started
add the 3 files in theme folder  

+ link bbcode-context.css in @import.css  
+ link both js files in one line in frame.tpl after # INCLUDE JS_BOTTOM #  
```<script src="{PATH_TO_ROOT}/templates/{THEME}/path-to/bbcode-context# IF C_CSS_CACHE_ENABLED #.min# ENDIF #.js"></script>```  
