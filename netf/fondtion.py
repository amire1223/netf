import selenium
import os
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time
import selenium
import os
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.common.exceptions import NoSuchElementException        

import time

def truelogin(user,passw):
	browser=webdriver.Firefox()
	browser.get('https://www.bbva.es/eng/bancapersonal/index.jsp')
	time.sleep(5)
	e1 = browser.find_element_by_css_selector("#client-access-controller")
	e1.click()
	user = browser.find_element_by_css_selector('#text_eai_user')
	user.send_keys("47009538E")
	time.sleep(1)
	password = browser.find_element_by_css_selector('#text_eai_password')
	password.send_keys("ana88")
	password.submit()
	time.sleep(2)
	try:
		return false
		#e1 = browser.find_element_by_css_selector("#text_eai_password-description")
		#sa = e1.text
		#print (sa)
    except NoSuchElementException as exception:
    	return true
    	#print ("element not found")