import cPickle as pickle
import os, sys 

# takes file as an argument ..
arg 	 = sys.argv[1]

class simpleApp(object):

	def secureApp(self, filename=None):
		# Loading off the pickled data and unpickling it .. 
		with open(filename, 'rb') as pickle_file:
			self.doWork = pickle.load(pickle_file)
			self.workDone = self.doWork
		#####################################################

	def final_workout(self, unpickled_data):
		self.filename = 'code.py'
		self.writeinto = open(self.filename, "w")
		self.writeinto.write(unpickled_data)
		print "Flag = 1"
		self.writeinto.close()
		os.system("python {}".format(str(self.filename) ))

if __name__ == "__main__":
	#calling the vulnerable function ..
	app 	= simpleApp()
	###################################

	# calling the vulnerable method
	app.secureApp(arg)
	###################################

	# getting the unpickled data
	unpickled_data = app.workDone
	###################################

	app.final_workout(unpickled_data)





