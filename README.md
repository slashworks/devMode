devMode
=======

Contao module to add custom code only for development mode. The module ships with a new settings field devMode.

## method isActive

Simple check if the flag is active:

```
\slashworks\DevMode::isActive(); // true or false
```

## hook preventTplOutput

You can simple use the preventTplOutput hook to modify the page. F.e. just disable the analytics field.

```
// TL_ROOT/system/modules/myCustomModule/config/config.php
$GLOBALS['TL_HOOKS']['DevMode']['preventTplOutput'][] = array('\slashworks\DevModeCustoms', 'modifyTplOutput');

// TL_ROOT/system/modules/myCustomModule/classes/DevModeCustoms.php
namespace slashworks;


class DevModeCustoms {

    public function modifyTplOutput($objPage, $objLayout, $objPageRegular)
    {

        $objLayout->analytics = false;

    }

}

// Don`t forget to run the auto load creator ;)
```
