Base64 phing tasks & console targets
====================================

To test it, create a new folder, and put composer.json as

```
{
        "require": {
		"corretgecom/phing-base64": "dev-master"
	}
}
```

Then create a file build.xml

```
<?xml version="1.0" ?>
<project basedir="." default="list">

	<target name="list" description="List targets">
		<exec command="phing -l" level="verbose" passthru="true" />
	</target>

	<import file="vendor/bin/corretgecom.qgpl.base64.xml" optional="false" />

</project>
```

And execute

```
composer update
```

And then

```
phing
```

the default target is one that list all targets:

```
Buildfile: /Volumes/develop/corretge/phing/test-base64/build.xml

build.xml > list:

Buildfile: /Volumes/develop/corretge/phing/test-base64/build.xml
Default target:
-------------------------------------------------------------------------------
 list                        List targets

Main targets:
-------------------------------------------------------------------------------
 console.qgpl.base64.decode  Convertim a string una cadena Base64 preguntada
 console.qgpl.base64.encode  Convertim a Base64 una cadena preguntada
 list                        List targets


BUILD FINISHED

Total time: 0.5482 seconds
```

