<?php

use Illuminate\Database\Seeder;

class IdeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ides = ['Flash Professional','Flash Builder','FlashDevelop','IntelliJ IDEA','Powerflasher FDT','Eclipse','GNAT Programming Studio','Basic4android','Gambas','FreeBASIC','Microsoft Visual Studio','MonoDevelop Xamarin','PBASIC Stamp Editor','PureBasic','SharpDevelop','Xojo','AppCode (IntelliJ IDEA)','C++Builder','Code::Blocks','CodeLite','Dev-C++','Geany','JetBrains CLion','KDevelop','LabWindows/CVI','LccWin32','Netbeans','Oracle Solaris Studio','Pelles C','Philasmicos Entwickler Studio','Qt Creator','Rational Software Architect ','Ultimate++ TheIDE','wxDev-C++','Xcode','Allegro Common Lisp','LispWorks','SLIME','BlackBox Component Builder','CPIde','EiffelStudio','OpenWatcom','BlueJ','Codenvy','DrJava','Greenfoot','JBuilder','JCreator','JDeveloper','jGRASP','Rational Application Developer','Servoy','Anjuta','Brackets','Aptana Studio','Codeanywhere','Komodo IDE / Edit','Nodeclipse NTS','NuSphere PhpED','Oracle JDeveloper','WebStorm','Decoda','Codea','ZeroBrane Studio','Delphi','Free Pascal','Lazarus','MIDletPascal','Morfik','MSEide','PocketStudio','Padre','Adobe Dreamweaver','Codelobster','HTML-Kit','PHPEdit','PhpStorm','Quanta Plus','RadPHP','Zend Studio','Eric Python and Ruby IDE','IDLE','Ninja-IDE','PIDA','PyCharm','PyDev','PyScripter','PythonAnywhere','SourceLair','Spyder','Stani\'s Python Editor','Wing IDE','DrRacket','RubyMine','Dolphin Smalltalk','Pharo','Squeak','VisualWorks','vi/Vim','Notepad++','SublimeText','Emacs'];
        foreach($ides as $ide)
        {
            DB::table('ides')->insert([
                'name' => $ide
            ]);
        }
    }
}
