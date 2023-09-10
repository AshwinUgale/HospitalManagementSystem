<footer class="footer text-center"><?php echo $this->db->get_where('settings', array('type' => 'footer'))->row()->description;?></footer>
			
			
	