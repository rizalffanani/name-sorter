# random-name

return sorting names.

``` $files=$this->getFile();
    	sort($files);
    	for($x = 0; $x < $this->getCount($files); $x++) {
			$texk2 .= ($files[$x]."<br>");
		    $texk.=$files[$x].PHP_EOL;
		}
        return [
            'texk' => $texk,
            'texk2' => $texk2,
        ];
  
```
