from django.db import models

# Create your models here.
class Eolica(models.Model):
    i = models.FloatField()
    wd = models.CharField()
    ws = models.FloatField()
    v = models.FloatField()