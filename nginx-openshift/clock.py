import time
import logging

logging.basicConfig(filename="/app/newfile.log",
                    format='%(asctime)s %(message)s',
                    filemode='w')

logger=logging.getLogger()
logger.setLevel(logging.DEBUG)

while True:
  localtime = time.localtime()
  result = time.strftime("%I:%M:%S %p", localtime)
  print(result)
  logger.info("Just an information")
  time.sleep(1)
