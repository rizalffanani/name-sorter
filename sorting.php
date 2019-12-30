<?php
// Single Responsibility Principle Violation
class Report
{
    public function getFile()
    {
    	$files = file('unsorted-names-list.txt', FILE_IGNORE_NEW_LINES);
        return $files;
    }
    public function getCount($files)
    {
        return count($files);
    }
    public function getContents()
    {
    	$texk="";$texk2="";
    	$files=$this->getFile();
    	sort($files);
    	for($x = 0; $x < $this->getCount($files); $x++) {
			$texk2 .= ($files[$x]."<br>");
		    $texk.=$files[$x].PHP_EOL;
		}
        return [
            'texk' => $texk,
            'texk2' => $texk2,
        ];
    }
    public function formatSort()
    {
    	$files2=$this->getContents();
    	$myfile = fopen("sorted-names-list.txt", "w") or die("Unable to open file!");
		fwrite($myfile, $files2['texk']);
		fclose($myfile);
		echo $files2['texk2'];
    }
}

$obj=new Report(); 
$obj->formatSort(); 
?>