<!--f-size, 1 2) file-type 3) fstat--><?php echo filesize('C:\wamp64\www\personal-dash\dash-edit.php'); ?>✅<br><?php echo filetype('C:\wamp64\www\personal-dash\dash-edit.php'); ?>✅<br><?php echo filetype('C:\wamp64\www\personal-dash'); ?>✅<br><?php print_r(stat('C:\wamp64\www\personal-dash\dash-edit.php'));?>✅<br><?php echo "Remote:D-" . filesize('D:\Backup-sync 12.31-9\Auxiliary-files\7 - Upwork.proposal-templates\h0_Intellipaat - Course\h1s1_Module-SQL\Modules.1-5.zip'); ?>✅<br>
<!--expl root
	x.ref-media,URL.prs
-->Return a list of files inside a folder path <?php print_r(scandir('C:\wamp64\www\personal-dash')); ?>✅
<!--folder size,1-->Used as red; fold-size match, do not expl <?php echo filesize('C:\wamp64\www\personal-dash'); ?>
<!--# of files in folder
	If fold-size diff, check first, any for new files # 
		Expl-root count(res) -->
<!--file naming
	URL-constr; scandir output + append returned file or folder name to the root-path # for subseq-proc -->
<!--tabl.interf-basic
	fstat(mtime), last changed can be used in lieu of size to ID changream -->
<!--message.ban-cats-->
<!--add.new-v,host-->
<!--add.new-file,rename-->
<!--loop combo-->Expl-root + file names, sizes<br>
<!--disc-space
	PHP:function.disk-total-space.php --><?php echo disk_total_space('C:');?><br><br><br>
	
<?php $root_dir = 'C:\Users\Yakun\Documents\Backup-sync\Digital.Archive-Permanus\4 - WP-MIC';$count=0;if(isset($_POST["root_dir"])){$root_dir = $_POST["root_dir"];/*echo$root_dir;*/}?>
<form method="post"><input name="root_dir" type="text"> Root-URL </input><button>Submit</button></form>
<table><tr><th>URL</th><th>file-size</th><th>last-mod</th><th>attr:ID</th></tr>
<!--vert-test,1.6th.30--><?php chdir($root_dir);/*print_r(scandir('.'));✅*/foreach(scandir('.') as $obj){if(filetype($obj)=='file'){?><tr><td><?php echo "root:".$obj; ?></td><td><?php echo filesize($obj); ?></td><td><?php echo filemtime($obj);?></td><td><?php $count=$count+1;echo$count;?></td></tr><?php }/*else-if 'dir', explr*/}?>
To do ^ what is the content of the scandir array, and can the content-elem be acted upon dir by filetype? Possib, I need a abs-path for all, so I may need to decl a root-var # 
</table>

<?php function compr_气($db_obj1, $db_obj2){/*general compr_matchvs*/
/*tags: SQL-MERGE, SQL:temp-tbl, PHP;assoc-array<idea>|array_column*/}?>

<!--notes:
[7th-1]
	Soliloq: Catalogue each row; spare, in each it, any perf-matches of 1 of 3<Qu-Bai>recycle compr-Air <>cross-Device 
	Whats"App"Real application of a temp-tbl; let's say I scan my computer's file system to document my stuff; next time I scan, I only want to update w/ the changes; 
		I can make a temp-tbl of the latest scan, and compr # it w/ the old scan, before merging when not match xD
		To gen these, I need a "no questions asked" raw dump of all file names, and mem'd, their dirs, since I will only compr<MVP>what is inside each dir, w/ each other; therefore,
			the func needs to gen compr-arrays; 
	The HTML display can be negotiated later; we can start with a standard all-indent table, and displ the path in path, or w/ dividers
	Interf-Desig:blind&post_ID=641
		H1: C:\Users\Yakun\Documents\Backup-sync
		H2S1: Aux-Files | H2S2: Archive-Perm | H2S3: Roll-Back
		H2S1-H3S0: Inventory H2S1-H3S1: Ch.45-music,treatise H2S1-H3S2: MIC-covers
		H2S2-H3S1: Four Horsemen
		$attributes = label=H2S1-H3S0; | label=H2S1.H3S0-H4S1,H5S3; oh.he-rael,too.gooo
			Investig; how to catalog the attr, which needs label= to be matched between the temp and old-tbl 
	x.ref-Intelli,SQL stored_proc level, temp_tbl, inner join can only return what dir-intersecs but can be used to eliminate from each side 
		can I use WHEN NOT MATCHED with select, rt merge? Naraj: Yes merge button, intrf 
[Late.22-6th.30]
	Compr next: document one layer of a partic-direc and get attr of files into an HTML-tbl
	Next: build a recursive loop that re-scans the next fold-layer<loa>, possibly with 2 loop layers#bet
	A file has an access.mod-time 
1) Returns the size of the file in *bytes* 2) filetype returns bin "file" or "dir"
expl root, scandir output: Array ( [0] => . [1] => .. [2] => dash-edit.php [3] => delete-confirm.php [4] => index.php [5] => inner-RAM [6] => login.php [7] => media [8] => page-list.php [9] => page.create-form.php [10] => php_local_libs [11] => post.post-number.php [12] => process-redir [13] => register.php [14] => testing-progress )
	Folder names do not have a file-ext, can't see other differen # note I use . in certain file-names, but the last . if file, separates to # the extens
	stat() returns: Array ( [0] => 4134414626 [1] => 5629499534547453 [2] => 33206 [3] => 1 [4] => 0 [5] => 0 [6] => 0 [7] => 11676 [8] => 1687789152 [9] => 1687028377 [10] => 1665649628 [11] => -1 [12] => -1 [dev] => 4134414626 [ino] => 5629499534547453 [mode] => 33206 [nlink] => 1 [uid] => 0 [gid] => 0 [rdev] => 0 [size] => 11676 [atime] => 1687789152 [mtime] => 1687028377 [ctime] => 1665649628 [blksize] => -1 [blocks] => -1 ) 
		a pseudo.assoc-array, pattern; stat()runs on f-str, whereas fstat reqs a resource.f-open <W3, php.net late-22>
			[0] or [dev] - Device number
			[1] or [ino] - Inode number
			[2] or [mode] - Inode protection mode
			[3] or [nlink] - Number of links
			[4] or [uid] - User ID of owner
			[5] or [gid] - Group ID of owner
			[6] or [rdev] - Inode device type
			[7] or [size] - Size in bytes
			[8] or [atime] - Last access (as Unix timestamp)
			[9] or [mtime] - Last modified (as Unix timestamp) Spec.W3/func_filesystem_filemtime.asp
			[10] or [ctime] - Last inode change (as Unix timestamp)
			[11] or [blksize] - Blocksize of filesystem IO (if supported)
			[12] or [blocks] - Number of blocks allocated
3) folder size; issue: folder size is smaller than a containt #
	db-str for SQL$this: goal: catalog USBs and clear compr tasks from F-x,We.Xin
disc-space; path provided must be 'C:' // remote-test # 
-->

<!-- test-URL http://compr-meta/testing-progress/compr.file-read,verts.php --> 
<!-- res:
	https://www.w3schools.com/php/func_filesystem_fputcsv.asp 
	https://www.w3schools.com/php/func_filesystem_filetype.asp
	https://www.w3schools.com/php/func_directory_scandir.asp -->